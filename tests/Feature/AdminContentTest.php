<?php

namespace Tests\Feature;

use App\Models\Camping;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdminContentTest extends TestCase
{
    use RefreshDatabase;

    private function admin(): User
    {
        $this->seed(\Database\Seeders\RolePermissionSeeder::class);

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        return $user->assignRole('Admin');
    }

    /** @return list<string> */
    private function modules(): array
    {
        return [
            'users', 'sliders', 'services', 'testimonis', 'partners', 'volunteers',
            'categories', 'blogs', 'projects', 'clients', 'campings', 'organizers',
            'events', 'donaturs', 'donations', 'payments', 'product-categories',
            'products', 'contacts',
        ];
    }

    public function test_every_content_module_is_behind_the_login(): void
    {
        foreach ($this->modules() as $module) {
            $this->get("/admin/{$module}")->assertRedirect(route('login'));
        }
    }

    public function test_admin_can_open_every_content_module(): void
    {
        $this->actingAs($this->admin());

        foreach ($this->modules() as $module) {
            $this->get("/admin/{$module}")->assertOk();
        }
    }

    public function test_admin_can_open_every_create_form(): void
    {
        $this->actingAs($this->admin());

        foreach ($this->modules() as $module) {
            if ($module === 'contacts') {
                continue; // messages arrive from the public form only
            }

            $this->get("/admin/{$module}/create")->assertOk();
        }
    }

    public function test_admin_can_create_edit_and_delete_a_slider(): void
    {
        $this->actingAs($this->admin());

        $this->post('/admin/sliders', [
            'label' => 'Welcome',
            'title' => 'Save The Coast',
            'description' => 'A better shoreline',
            'order' => 1,
            'status' => 'active',
        ])->assertRedirect(route('admin.sliders.index'));

        $slider = Slider::firstWhere('title', 'Save The Coast');
        $this->assertNotNull($slider);

        $this->put("/admin/sliders/{$slider->id}", [
            'label' => 'Welcome',
            'title' => 'Save The Coast Now',
            'description' => 'A better shoreline',
            'order' => 2,
            'status' => 'draft',
        ])->assertRedirect(route('admin.sliders.index'));

        $this->assertDatabaseHas('sliders', ['title' => 'Save The Coast Now', 'status' => 'draft']);

        $this->delete("/admin/sliders/{$slider->id}");
        $this->assertDatabaseMissing('sliders', ['id' => $slider->id]);
    }

    public function test_creating_a_slider_requires_a_title(): void
    {
        $this->actingAs($this->admin());

        $this->from('/admin/sliders/create')
            ->post('/admin/sliders', ['title' => '', 'order' => 1, 'status' => 'active'])
            ->assertSessionHasErrors('title');

        $this->assertDatabaseCount('sliders', 0);
    }

    public function test_uploading_an_image_stores_it_and_deleting_removes_it(): void
    {
        Storage::fake('public');
        $this->actingAs($this->admin());

        $this->post('/admin/partners', [
            'name' => 'Green Earth',
            'description' => 'Partner',
            'image' => UploadedFile::fake()->image('logo.png'),
        ])->assertRedirect(route('admin.partners.index'));

        $partner = Partner::firstWhere('name', 'Green Earth');
        $this->assertNotNull($partner->image);
        Storage::disk('public')->assertExists($partner->image);

        $storedPath = $partner->image;
        $this->delete("/admin/partners/{$partner->id}");

        Storage::disk('public')->assertMissing($storedPath);
        $this->assertDatabaseMissing('partners', ['id' => $partner->id]);
    }

    public function test_editing_without_a_new_image_keeps_the_existing_one(): void
    {
        Storage::fake('public');
        $this->actingAs($this->admin());

        $this->post('/admin/partners', [
            'name' => 'Green Earth',
            'image' => UploadedFile::fake()->image('logo.png'),
        ]);

        $partner = Partner::firstWhere('name', 'Green Earth');
        $original = $partner->image;

        $this->put("/admin/partners/{$partner->id}", ['name' => 'Green Earth Renamed']);

        $this->assertSame($original, $partner->fresh()->image);
        $this->assertSame('Green Earth Renamed', $partner->fresh()->name);
    }

    public function test_relation_dropdowns_are_populated(): void
    {
        $this->actingAs($this->admin());
        Category::create(['title' => 'Mangrove']);

        $this->get('/admin/blogs/create')->assertOk()->assertSee('Mangrove');
        $this->get('/admin/projects/create')->assertOk()->assertSee('Mangrove');
    }

    public function test_messages_cannot_be_created_from_the_panel(): void
    {
        $this->actingAs($this->admin());

        $this->post('/admin/contacts', ['name' => 'X'])->assertStatus(405);
    }

    public function test_admin_can_delete_a_message(): void
    {
        $this->actingAs($this->admin());
        $contact = Contact::create([
            'name' => 'Budi', 'email' => 'budi@example.com', 'message' => 'Halo',
        ]);

        $this->from('/admin/contacts')->delete("/admin/contacts/{$contact->id}")
            ->assertRedirect('/admin/contacts');

        $this->assertDatabaseMissing('contacts', ['id' => $contact->id]);
    }

    public function test_campaign_progress_only_counts_successful_donations(): void
    {
        $camping = Camping::create(['title' => 'Coast', 'category' => 'plant', 'target' => 1000]);

        $camping->donations()->create(['amount' => 250, 'status' => 'SUCCESS']);
        $camping->donations()->create(['amount' => 500, 'status' => 'PENDING']);

        $this->assertSame(250, $camping->collected());
        $this->assertSame(25.0, $camping->progress());
    }

    public function test_campaign_progress_is_capped_and_safe_without_a_target(): void
    {
        $camping = Camping::create(['title' => 'Coast', 'category' => 'plant', 'target' => 0]);
        $camping->donations()->create(['amount' => 500, 'status' => 'SUCCESS']);

        $this->assertSame(0.0, $camping->progress());

        $camping->update(['target' => 100]);
        $this->assertSame(100.0, $camping->fresh()->progress());
    }
}
