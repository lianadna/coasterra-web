<?php

namespace Tests\Feature;

use App\Models\Blog;
use App\Models\Camping;
use App\Models\Donation;
use App\Models\Donatur;
use App\Models\Partner;
use App\Models\Payment;
use App\Models\Project;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimoni;
use App\Models\Volunteer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LandingPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_every_public_page_loads_with_an_empty_database(): void
    {
        $pages = [
            '/', '/about', '/contact', '/services', '/blog-grid', '/blog-standard',
            '/blog-details', '/camping', '/camping-details', '/camping-donation',
            '/donations', '/project', '/project-details', '/services-details',
            '/volunteer', '/volunteer-details', '/be-volunteer',
        ];

        foreach ($pages as $page) {
            $this->get($page)->assertOk();
        }
    }

    public function test_landing_page_renders_content_from_the_database(): void
    {
        Slider::create(['title' => 'Coastal Impact | Starts Here', 'label' => 'Our Mission', 'order' => 1, 'status' => 'active']);
        Service::create(['title' => 'Coastal Assessment', 'subtitle' => 'Risk mapping', 'status' => 'active']);
        Volunteer::create(['name' => 'Jose Prima', 'role' => 'Founder']);
        Testimoni::create(['name' => 'Nadia Putri', 'role' => 'Volunteer', 'rating' => 5]);
        Partner::create(['name' => 'Pulau Kelapa']);
        Project::create(['title' => 'Pivot Project', 'status' => 'ongoing']);
        Blog::create(['title' => 'World Mangrove Day', 'description' => 'Mangroves matter']);
        Camping::create(['title' => 'Energy For All', 'category' => 'community', 'target' => 1000000]);

        $this->get('/')
            ->assertOk()
            ->assertSee('Coastal Impact')
            ->assertSee('Starts Here')
            ->assertSee('Our Mission')
            ->assertSee('Coastal Assessment')
            ->assertSee('Jose Prima')
            ->assertSee('Nadia Putri')
            ->assertSee('Pivot Project')
            ->assertSee('World Mangrove Day')
            ->assertSee('Energy For All');
    }

    public function test_draft_sliders_are_hidden_from_the_landing_page(): void
    {
        Slider::create(['title' => 'Published Slide', 'order' => 1, 'status' => 'active']);
        Slider::create(['title' => 'Hidden Slide', 'order' => 2, 'status' => 'draft']);

        $this->get('/')->assertOk()->assertSee('Published Slide')->assertDontSee('Hidden Slide');
    }

    public function test_services_marked_coming_soon_are_hidden(): void
    {
        Service::create(['title' => 'Live Service', 'status' => 'active']);
        Service::create(['title' => 'Secret Service', 'status' => 'soon']);

        $this->get('/')->assertOk()->assertSee('Live Service')->assertDontSee('Secret Service');
    }

    public function test_sliders_follow_their_configured_order(): void
    {
        Slider::create(['title' => 'Second Slide', 'order' => 2, 'status' => 'active']);
        Slider::create(['title' => 'First Slide', 'order' => 1, 'status' => 'active']);

        $content = $this->get('/')->assertOk()->getContent();

        $this->assertLessThan(
            strpos($content, 'Second Slide'),
            strpos($content, 'First Slide'),
            'The slider with the lower order value should render first.'
        );
    }

    public function test_detail_pages_work_with_and_without_an_id(): void
    {
        $blog = Blog::create(['title' => 'Mangrove Report', 'description' => 'Details']);
        $project = Project::create(['title' => 'Pivot Project', 'status' => 'done']);
        $camping = Camping::create(['title' => 'Energy For All', 'category' => 'plant', 'target' => 100]);
        $volunteer = Volunteer::create(['name' => 'Jose Prima']);
        $service = Service::create(['title' => 'Coastal Assessment', 'status' => 'active']);

        $this->get("/blog-details/{$blog->id}")->assertOk();
        $this->get("/project-details/{$project->id}")->assertOk();
        $this->get("/camping-details/{$camping->id}")->assertOk();
        $this->get("/volunteer-details/{$volunteer->id}")->assertOk();
        $this->get("/services-details/{$service->id}")->assertOk();

        // Older links carry no id and must still resolve.
        $this->get('/blog-details')->assertOk();
        $this->get('/project-details')->assertOk();
    }

    public function test_visitor_can_send_a_contact_message(): void
    {
        $this->from('/')->post('/contact', [
            'name' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'number' => '08123456789',
            'message' => 'Saya tertarik jadi volunteer.',
        ])->assertRedirect();

        $this->assertDatabaseHas('contacts', [
            'name' => 'Budi Santoso',
            'email' => 'budi@example.com',
        ]);
    }

    public function test_contact_form_rejects_invalid_input(): void
    {
        $this->from('/')->post('/contact', [
            'name' => '',
            'email' => 'not-an-email',
            'message' => '',
        ])->assertSessionHasErrors(['name', 'email', 'message'], null, 'contact');

        $this->assertDatabaseCount('contacts', 0);
    }

    public function test_visitor_can_donate_to_a_campaign(): void
    {
        $camping = Camping::create(['title' => 'Energy For All', 'category' => 'plant', 'target' => 1000000]);

        $this->from("/camping-donation/{$camping->id}")
            ->post("/camping-donation/{$camping->id}", [
                'name' => 'Siti Rahayu',
                'email' => 'siti@example.com',
                'phone' => '08987654321',
                'amount' => 250000,
                'method' => 'Bank Transfer',
            ])->assertRedirect();

        $this->assertDatabaseHas('donaturs', ['email' => 'siti@example.com']);
        $this->assertDatabaseHas('donations', [
            'camping_id' => $camping->id,
            'amount' => 250000,
            'status' => 'PENDING',
        ]);

        $payment = Payment::first();
        $this->assertNotNull($payment);
        $this->assertSame('Bank Transfer', $payment->method);
        $this->assertStringStartsWith('CST-', $payment->code);
    }

    public function test_donation_below_the_minimum_is_rejected(): void
    {
        $camping = Camping::create(['title' => 'Energy For All', 'category' => 'plant', 'target' => 100]);

        $this->from("/camping-donation/{$camping->id}")
            ->post("/camping-donation/{$camping->id}", ['name' => 'Siti', 'amount' => 10])
            ->assertSessionHasErrors('amount', null, 'donation');

        $this->assertDatabaseCount('donations', 0);
        $this->assertDatabaseCount('payments', 0);
    }

    public function test_confirmed_donations_move_the_campaign_progress_bar(): void
    {
        $camping = Camping::create(['title' => 'Energy For All', 'category' => 'plant', 'target' => 1000000]);
        $donor = Donatur::create(['name' => 'Siti']);

        Donation::create([
            'camping_id' => $camping->id, 'donor_id' => $donor->id,
            'amount' => 250000, 'status' => 'PENDING',
        ]);

        $this->get('/')->assertOk()->assertSee('aria-valuenow="0"', false);

        Donation::first()->update(['status' => 'SUCCESS']);

        $this->get('/')->assertOk()->assertSee('aria-valuenow="25"', false);
    }
}
