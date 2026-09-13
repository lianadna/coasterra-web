<?php

namespace Tests\Feature;

use App\Models\Blog;
use App\Models\Camping;
use App\Models\Category;
use App\Models\Client;
use App\Models\Donation;
use App\Models\Donatur;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Service;
use App\Models\Testimoni;
use App\Models\Volunteer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InnerPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_project_pages_render_database_content(): void
    {
        $project = Project::create([
            'title' => 'Coastal Pivot Project',
            'status' => 'ongoing',
            'description' => 'Restoring mangrove belts in Demak.',
        ]);

        Client::create([
            'project_id' => $project->id,
            'name' => 'Coasterra Foundation',
            'budget' => 250000000,
            'location' => 'Demak, Jawa Tengah',
            'start_date' => now()->subMonth(),
            'end_date' => now()->addMonth(),
        ]);

        $this->get('/project')->assertOk()->assertSee('Coastal Pivot Project');

        $this->get("/project-details/{$project->id}")
            ->assertOk()
            ->assertSee('Coastal Pivot Project')
            ->assertSee('Restoring mangrove belts in Demak.')
            ->assertSee('Coasterra Foundation')
            ->assertSee('Rp 250.000.000')
            ->assertSee('Demak, Jawa Tengah');
    }

    public function test_volunteer_pages_render_database_content(): void
    {
        $volunteer = Volunteer::create([
            'name' => 'Jose Prima',
            'role' => 'Founder',
            'summary' => 'Leads the field team.',
            'instagram_url' => 'https://instagram.com/example',
        ]);

        $this->get('/volunteer')->assertOk()->assertSee('Jose Prima')->assertSee('Founder');

        $this->get("/volunteer-details/{$volunteer->id}")
            ->assertOk()
            ->assertSee('Jose Prima')
            ->assertSee('Leads the field team.')
            ->assertSee('https://instagram.com/example', false);
    }

    public function test_service_pages_render_database_content(): void
    {
        $service = Service::create([
            'title' => 'Coastal Assessment',
            'subtitle' => 'Risk mapping',
            'description' => 'Science based assessment.',
            'status' => 'active',
        ]);
        Service::create(['title' => 'Hidden Service', 'status' => 'soon']);

        $this->get('/services')
            ->assertOk()
            ->assertSee('Coastal Assessment')
            ->assertDontSee('Hidden Service');

        $this->get("/services-details/{$service->id}")
            ->assertOk()
            ->assertSee('Coastal Assessment')
            ->assertSee('Science based assessment.')
            ->assertDontSee('Hidden Service');
    }

    public function test_campaign_pages_show_live_progress(): void
    {
        $camping = Camping::create([
            'title' => 'Energy For All',
            'category' => 'community',
            'target' => 1000000,
            'description' => 'Clean energy for coastal villages.',
            'end_date' => now()->addDays(10),
        ]);

        $donor = Donatur::create(['name' => 'Siti Rahayu']);
        Donation::create([
            'camping_id' => $camping->id, 'donor_id' => $donor->id,
            'amount' => 250000, 'status' => 'SUCCESS', 'date' => now(),
        ]);
        Donation::create([
            'camping_id' => $camping->id, 'donor_id' => $donor->id,
            'amount' => 900000, 'status' => 'PENDING', 'date' => now(),
        ]);

        $this->get('/camping')
            ->assertOk()
            ->assertSee('Energy For All')
            ->assertSee('Rp 250.000')
            ->assertSee('Rp 1.000.000');

        $this->get("/camping-details/{$camping->id}")
            ->assertOk()
            ->assertSee('Energy For All')
            ->assertSee('Clean energy for coastal villages.')
            ->assertSee('Recent Donors')
            ->assertSee('Siti Rahayu')
            ->assertSee('aria-valuenow="25"', false);

        $this->get('/donations')->assertOk()->assertSee('Energy For All');
    }

    public function test_pending_donors_are_not_listed_as_recent_donors(): void
    {
        $camping = Camping::create(['title' => 'Energy For All', 'category' => 'plant', 'target' => 100000]);
        $pending = Donatur::create(['name' => 'Pending Person']);

        Donation::create([
            'camping_id' => $camping->id, 'donor_id' => $pending->id,
            'amount' => 50000, 'status' => 'PENDING', 'date' => now(),
        ]);

        $this->get("/camping-details/{$camping->id}")
            ->assertOk()
            ->assertDontSee('Pending Person')
            ->assertSee('No confirmed donations yet');
    }

    public function test_blog_listing_pages_render_posts(): void
    {
        $category = Category::create(['title' => 'Mangrove']);
        Blog::create([
            'title' => 'World Mangrove Day',
            'description' => 'Why mangroves matter',
            'category_id' => $category->id,
        ]);

        foreach (['/blog-grid', '/blog-standard'] as $page) {
            $this->get($page)
                ->assertOk()
                ->assertSee('World Mangrove Day')
                ->assertSee('Mangrove');
        }
    }

    public function test_blog_listing_filters_by_category(): void
    {
        $mangrove = Category::create(['title' => 'Mangrove']);
        $research = Category::create(['title' => 'Research']);

        Blog::create(['title' => 'Mangrove Post', 'category_id' => $mangrove->id]);
        Blog::create(['title' => 'Research Post', 'category_id' => $research->id]);

        $content = $this->get("/blog-grid?category={$mangrove->id}")->assertOk()->getContent();

        // The card grid is filtered; the sidebar keeps showing recent posts.
        $this->assertStringContainsString('Mangrove Post', $content);
        $this->assertSame(
            1,
            substr_count($content, 'blog-card-2'),
            'Only the matching post should be rendered as a card.'
        );
    }

    public function test_blog_listing_filters_by_search_term(): void
    {
        Blog::create(['title' => 'Mangrove Restoration']);
        Blog::create(['title' => 'Solar Power Update']);

        $content = $this->get('/blog-grid?q=Mangrove')->assertOk()->getContent();

        $this->assertSame(1, substr_count($content, 'blog-card-2'));
        $this->assertStringContainsString('Mangrove Restoration', $content);
    }

    public function test_blog_listing_shows_a_message_when_nothing_matches(): void
    {
        Blog::create(['title' => 'Mangrove Restoration']);

        $this->get('/blog-grid?q=nothing-matches-this')
            ->assertOk()
            ->assertSee('No posts match your filter');
    }

    public function test_blog_listing_paginates(): void
    {

        for ($i = 1; $i <= 12; $i++) {
            Blog::create(['title' => "Post number {$i}"]);
        }

        $firstPage = $this->get('/blog-grid')->assertOk()->getContent();
        $this->assertSame(9, substr_count($firstPage, 'blog-card-2'));
        $this->assertStringContainsString('page=2', $firstPage);

        $secondPage = $this->get('/blog-grid?page=2')->assertOk()->getContent();
        $this->assertSame(3, substr_count($secondPage, 'blog-card-2'));
    }

    public function test_blog_detail_page_renders_the_post_and_sidebar(): void
    {
        $category = Category::create(['title' => 'Mangrove']);
        $post = Blog::create([
            'title' => 'World Mangrove Day',
            'description' => "First paragraph.\n\nSecond paragraph.",
            'category_id' => $category->id,
        ]);
        Blog::create(['title' => 'Another Post']);

        $this->get("/blog-details/{$post->id}")
            ->assertOk()
            ->assertSee('World Mangrove Day')
            ->assertSee('First paragraph.')
            ->assertSee('Second paragraph.')
            ->assertSee('Recent Posts')
            ->assertSee('Another Post');
    }

    public function test_about_page_renders_team_testimonials_and_partners(): void
    {
        Volunteer::create(['name' => 'Jose Prima', 'role' => 'Founder']);
        Testimoni::create(['name' => 'Michelle Tan', 'role' => 'Advocate', 'rating' => 5, 'description' => 'Great work']);
        Partner::create(['name' => 'Pulau Kelapa']);

        $this->get('/about')
            ->assertOk()
            ->assertSee('Jose Prima')
            ->assertSee('Michelle Tan')
            ->assertSee('Great work')
            ->assertSee('Pulau Kelapa');
    }

    public function test_inner_pages_stay_usable_with_an_empty_database(): void
    {
        $pages = [
            '/project', '/project-details', '/volunteer', '/volunteer-details',
            '/services', '/services-details', '/camping', '/camping-details',
            '/donations', '/blog-grid', '/blog-standard', '/blog-details', '/about',
        ];

        foreach ($pages as $page) {
            $this->get($page)->assertOk();
        }

        $this->get('/project')->assertSee('No projects published yet');
        $this->get('/volunteer')->assertSee('No volunteers listed yet');
        $this->get('/camping')->assertSee('No campaigns running yet');
        $this->get('/blog-grid')->assertSee('No blog posts published yet');
    }
}
