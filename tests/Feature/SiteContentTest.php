<?php

namespace Tests\Feature;

use App\Models\Achievement;
use App\Models\Blog;
use App\Models\Camping;
use App\Models\Comment;
use App\Models\Setting;
use App\Models\Subscriber;
use App\Models\User;
use Database\Seeders\RolePermissionSeeder;
use Database\Seeders\SiteContentSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class SiteContentTest extends TestCase
{
    use RefreshDatabase;

    private function admin(): User
    {
        $this->seed(RolePermissionSeeder::class);

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        return $user->assignRole('Admin');
    }

    public function test_seeder_fills_settings_and_achievements(): void
    {
        $this->seed(SiteContentSeeder::class);

        $this->assertSame('Building a Greener Future Together', setting('about_title'));
        $this->assertCount(5, setting_lines('about_tab2_list'));
        $this->assertSame(4, Achievement::count());
    }

    public function test_setting_helper_falls_back_to_the_default(): void
    {
        $this->assertSame('fallback', setting('does_not_exist', 'fallback'));

        Setting::create(['key' => 'blank_one', 'value' => '', 'label' => 'Blank']);

        $this->assertSame('fallback', setting('blank_one', 'fallback'));
    }

    public function test_landing_page_uses_settings_and_achievements(): void
    {
        $this->seed(SiteContentSeeder::class);

        Setting::where('key', 'about_title')->update(['value' => 'Membangun Masa Depan Pesisir']);
        Setting::where('key', 'about_tab2_list')->update(['value' => "Poin pertama\nPoin kedua"]);
        Achievement::query()->delete();
        Achievement::create(['label' => 'Pohon Ditanam', 'value' => 4200, 'suffix' => '+', 'order' => 1]);

        // The helper caches values, so clear it the way a save would.
        cache()->forget('settings.all');

        $this->get('/')
            ->assertOk()
            ->assertSee('Membangun Masa Depan Pesisir')
            ->assertSee('Poin pertama')
            ->assertSee('Poin kedua')
            ->assertSee('Pohon Ditanam')
            ->assertSee('data-purecounter-end="4200"', false);
    }

    public function test_admin_can_open_and_save_site_content(): void
    {
        $this->seed(SiteContentSeeder::class);
        $this->actingAs($this->admin());

        $this->get('/admin/settings')->assertOk()->assertSee('Heading');

        $this->put('/admin/settings', [
            'values' => [
                'about_title' => 'Judul Baru',
                'comments_auto_approve' => '1',
            ],
        ])->assertRedirect(route('admin.settings.index'));

        $this->assertDatabaseHas('settings', ['key' => 'about_title', 'value' => 'Judul Baru']);
        $this->assertDatabaseHas('settings', ['key' => 'comments_auto_approve', 'value' => '1']);
    }

    public function test_saving_settings_clears_the_cache(): void
    {
        $this->seed(SiteContentSeeder::class);
        $this->assertSame('Building a Greener Future Together', setting('about_title'));

        $this->actingAs($this->admin());
        $this->put('/admin/settings', ['values' => ['about_title' => 'Judul Baru']]);

        $this->assertSame('Judul Baru', setting('about_title'));
    }

    public function test_an_overlong_text_setting_is_rejected(): void
    {
        $this->seed(SiteContentSeeder::class);
        $this->actingAs($this->admin());

        $this->from('/admin/settings')
            ->put('/admin/settings', ['values' => ['about_title' => str_repeat('a', 501)]])
            ->assertSessionHasErrors('values.about_title');

        $this->assertDatabaseHas('settings', [
            'key' => 'about_title',
            'value' => 'Building a Greener Future Together',
        ]);
    }

    public function test_admin_can_manage_achievements(): void
    {
        $this->actingAs($this->admin());

        $this->get('/admin/achievements')->assertOk();
        $this->get('/admin/achievements/create')->assertOk();

        $this->post('/admin/achievements', [
            'label' => 'Pohon Ditanam', 'value' => 4200, 'suffix' => '+', 'order' => 1,
        ])->assertRedirect(route('admin.achievements.index'));

        $this->assertDatabaseHas('achievements', ['label' => 'Pohon Ditanam', 'value' => 4200]);
    }

    public function test_visitor_comment_waits_for_approval_by_default(): void
    {
        $this->seed(SiteContentSeeder::class);
        $blog = Blog::create(['title' => 'Mangrove Day']);

        $this->from("/blog-details/{$blog->id}")
            ->post("/comment/blog/{$blog->id}", [
                'name' => 'Budi Santoso',
                'email' => 'budi@example.com',
                'message' => 'Artikel yang bermanfaat.',
            ])->assertRedirect();

        $this->assertDatabaseHas('comments', [
            'name' => 'Budi Santoso',
            'status' => 'pending',
            'commentable_id' => $blog->id,
        ]);

        // Pending comments must not leak onto the public page.
        $this->get("/blog-details/{$blog->id}")
            ->assertOk()
            ->assertDontSee('Artikel yang bermanfaat.')
            ->assertSee('Comments (00)');
    }

    public function test_comment_is_published_immediately_when_auto_approve_is_on(): void
    {
        $this->seed(SiteContentSeeder::class);
        Setting::where('key', 'comments_auto_approve')->update(['value' => '1']);
        cache()->forget('settings.all');

        $camping = Camping::create(['title' => 'Energy For All', 'category' => 'plant', 'target' => 100]);

        $this->post("/comment/camping/{$camping->id}", [
            'name' => 'Siti Rahayu',
            'email' => 'siti@example.com',
            'message' => 'Semoga sukses!',
        ])->assertRedirect();

        $this->get("/camping-details/{$camping->id}")
            ->assertOk()
            ->assertSee('Siti Rahayu')
            ->assertSee('Semoga sukses!')
            ->assertSee('Comments (01)');
    }

    public function test_comment_form_validates_input(): void
    {
        $blog = Blog::create(['title' => 'Mangrove Day']);

        $this->from("/blog-details/{$blog->id}")
            ->post("/comment/blog/{$blog->id}", ['name' => '', 'email' => 'nope', 'message' => ''])
            ->assertSessionHasErrors(['name', 'email', 'message'], null, 'comment');

        $this->assertDatabaseCount('comments', 0);
    }

    public function test_unknown_comment_subjects_are_rejected(): void
    {
        $this->post('/comment/user/1', [
            'name' => 'X', 'email' => 'x@example.com', 'message' => 'hi',
        ])->assertNotFound();
    }

    public function test_admin_can_approve_hide_and_delete_comments(): void
    {
        $this->actingAs($this->admin());
        $blog = Blog::create(['title' => 'Mangrove Day']);
        $comment = $blog->comments()->create([
            'name' => 'Budi', 'email' => 'budi@example.com', 'message' => 'Halo', 'status' => 'pending',
        ]);

        $this->get('/admin/comments')->assertOk()->assertSee('Budi');

        $this->put("/admin/comments/{$comment->id}/approve");
        $this->assertSame('approved', $comment->fresh()->status);

        $this->put("/admin/comments/{$comment->id}/unapprove");
        $this->assertSame('pending', $comment->fresh()->status);

        $this->delete("/admin/comments/{$comment->id}");
        $this->assertDatabaseCount('comments', 0);
    }

    public function test_admin_can_filter_comments_by_status(): void
    {
        $this->actingAs($this->admin());
        $blog = Blog::create(['title' => 'Mangrove Day']);
        $blog->comments()->create(['name' => 'Pending Person', 'email' => 'a@example.com', 'message' => 'x', 'status' => 'pending']);
        $blog->comments()->create(['name' => 'Published Person', 'email' => 'b@example.com', 'message' => 'y', 'status' => 'approved']);

        $this->get('/admin/comments?status=pending')
            ->assertOk()->assertSee('Pending Person')->assertDontSee('Published Person');

        $this->get('/admin/comments?status=approved')
            ->assertOk()->assertSee('Published Person')->assertDontSee('Pending Person');
    }

    public function test_visitor_can_subscribe_to_the_newsletter(): void
    {
        $this->from('/')->post('/subscribe', ['email' => 'budi@example.com'])->assertRedirect();

        $this->assertDatabaseHas('subscribers', [
            'email' => 'budi@example.com',
            'status' => 'subscribed',
        ]);
    }

    public function test_subscribing_twice_does_not_fail(): void
    {
        Subscriber::create(['email' => 'budi@example.com', 'status' => 'unsubscribed']);

        $this->from('/')->post('/subscribe', ['email' => 'budi@example.com'])
            ->assertRedirect()
            ->assertSessionHasNoErrors();

        $this->assertDatabaseCount('subscribers', 1);
        $this->assertDatabaseHas('subscribers', ['email' => 'budi@example.com', 'status' => 'subscribed']);
    }

    public function test_newsletter_rejects_an_invalid_email(): void
    {
        $this->from('/')->post('/subscribe', ['email' => 'not-an-email'])
            ->assertSessionHasErrors('email', null, 'newsletter');

        $this->assertDatabaseCount('subscribers', 0);
    }

    public function test_subscribers_are_listed_but_not_created_from_the_panel(): void
    {
        $this->actingAs($this->admin());
        Subscriber::create(['email' => 'budi@example.com']);

        $this->get('/admin/subscribers')->assertOk()->assertSee('budi@example.com');
        $this->get('/admin/subscribers/create')->assertStatus(405);
    }

    public function test_new_modules_are_behind_the_login_and_permissions(): void
    {
        foreach (['settings', 'achievements', 'comments', 'subscribers'] as $module) {
            $this->get("/admin/{$module}")->assertRedirect(route('login'));
        }

        $this->seed(RolePermissionSeeder::class);
        $nobody = User::create(['name' => 'N', 'email' => 'n@example.com', 'password' => Hash::make('12345678')]);

        $this->actingAs($nobody);
        foreach (['settings', 'achievements', 'comments', 'subscribers'] as $module) {
            $this->get("/admin/{$module}")->assertForbidden();
        }
    }
}
