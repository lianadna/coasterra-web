<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Camping;
use App\Models\Category;
use App\Models\Client;
use App\Models\Event;
use App\Models\Organizer;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimoni;
use App\Models\User;
use App\Models\Volunteer;
use Illuminate\Database\Seeder;

/**
 * Fills the landing page with the copy that used to be hardcoded in the
 * Blade templates, so the site looks the same once it reads from the database.
 */
class LandingContentSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::firstWhere('email', 'admin@gmail.com') ?? User::first();

        $sliders = [
            ['Let\'s Build Coastal Resilience', 'Turning Climate Commitments | into Coastal Impact', 'We turn climate commitments into practical, evidence-based action across Indonesia\'s coastal ecosystems.', 1],
            ['Let\'s Act for Nature\'s Future', 'Build This Earth with | Heart\'s True Vision', 'Nature-based, science-backed, and community-driven - resilience for Indonesia\'s coastlines.', 2],
        ];

        foreach ($sliders as [$label, $title, $description, $order]) {
            Slider::firstOrCreate(['title' => $title], [
                'label' => $label,
                'description' => $description,
                'order' => $order,
                'status' => 'active',
            ]);
        }

        $services = [
            ['Coastal Assessment', 'Science-based risk mapping and data assessment'],
            ['Nature-Based Solutions', 'Mangrove restoration and coastal protection designed with nature'],
            ['Community Empowerment', 'Training and livelihood programs for coastal communities'],
        ];

        foreach ($services as [$title, $subtitle]) {
            Service::firstOrCreate(['title' => $title], [
                'subtitle' => $subtitle,
                'description' => $subtitle,
                'status' => 'active',
            ]);
        }

        $categories = ['Mangrove', 'Coasterra', 'Community', 'Research'];
        foreach ($categories as $title) {
            Category::firstOrCreate(['title' => $title], ['description' => $title.' related content.']);
        }

        $mangrove = Category::firstWhere('title', 'Mangrove');

        $posts = [
            ['Today is World Mangrove Day!', 'Keberadaan pohon-pohon pesisir ini sangat krusial bagi kelestarian planet kita.'],
            ['Introducing Coasterra', 'Coasterra turns climate commitments into practical action across Indonesia\'s coastlines.'],
        ];

        foreach ($posts as [$title, $description]) {
            Blog::firstOrCreate(['title' => $title], [
                'description' => $description,
                'category_id' => $mangrove?->id,
                'user_id' => $admin?->id,
            ]);
        }

        $volunteers = [
            ['Jose Prima', 'Founder'],
            ['Affit Zakaria', 'Founder'],
            ['Prima Yohana', 'Co-Founder'],
            ['Endah Kartika', 'Co-Founder'],
        ];

        foreach ($volunteers as [$name, $role]) {
            Volunteer::firstOrCreate(['name' => $name], [
                'role' => $role,
                'summary' => $name.' is part of the Coasterra team.',
            ]);
        }

        $testimonials = [
            ['Nadia Putri', 'Volunteer', 5.0, 'Joining Coasterra\'s activities gave me a deeper understanding of Indonesia\'s coastal ecosystems.'],
            ['Michelle Tan', 'Sustainability Advocate', 5.0, 'Coasterra combines environmental action with community engagement in a way that feels both practical and inspiring.'],
        ];

        foreach ($testimonials as [$name, $role, $rating, $description]) {
            Testimoni::firstOrCreate(['name' => $name], [
                'role' => $role,
                'rating' => $rating,
                'description' => $description,
            ]);
        }

        Partner::firstOrCreate(['name' => 'Pulau Kelapa'], ['description' => 'Local partner in Kepulauan Seribu.']);

        $project = Project::firstOrCreate(['title' => 'Pivot Project'], [
            'status' => 'ongoing',
            'category_id' => Category::firstWhere('title', 'Research')?->id,
            'description' => 'Assess climate risks, implement nature-based interventions, engage local communities, and measure environmental and socioeconomic impacts.',
        ]);

        Client::firstOrCreate(['project_id' => $project->id], [
            'name' => 'Coasterra Foundation',
            'start_date' => now()->subMonths(6),
            'end_date' => now()->addMonths(6),
            'budget' => 250000000,
            'location' => 'Demak, Jawa Tengah',
        ]);

        $camping = Camping::firstOrCreate(['title' => 'Sustainable Energy for All'], [
            'category' => 'community',
            'subtitle' => 'Why your donation matters',
            'description' => 'Support clean energy access for coastal communities in Indonesia.',
            'target' => 165600000,
            'start_date' => now()->subDays(10),
            'end_date' => now()->addDays(29),
        ]);

        $organizer = Organizer::firstOrCreate(['name' => 'Coasterra Team'], [
            'desc' => 'The Coasterra field team.',
            'location' => 'Jakarta',
            'schedule' => now()->addDays(20),
        ]);

        Event::firstOrCreate(['title' => 'Mangrove Planting Day'], [
            'camping_id' => $camping->id,
            'organizer_id' => $organizer->id,
            'schedule' => now()->addDays(20)->setTime(8, 30),
            'location' => 'Pulau Kelapa, Kepulauan Seribu',
        ]);
    }
}
