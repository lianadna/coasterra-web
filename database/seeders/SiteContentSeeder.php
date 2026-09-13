<?php

namespace Database\Seeders;

use App\Models\Achievement;
use App\Models\Setting;
use Illuminate\Database\Seeder;

/**
 * Moves the copy that used to be hardcoded in the About Us and
 * Company Achievements sections into editable database rows.
 */
class SiteContentSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // group, key, label, type, value, help
            ['about', 'about_subtitle', 'Section Label', 'text', 'About Us', 'Small text above the heading.'],
            ['about', 'about_title', 'Heading', 'text', 'Building a Greener Future Together', null],
            ['about', 'about_tab1_title', 'Tab 1 Title', 'text', 'Our History', null],
            ['about', 'about_tab1_text', 'Tab 1 Text', 'textarea', "COASTERRA is an Indonesia-based coastal climate venture connecting scientific assessment, community engagement, and corporate ESG implementation into measurable coastal resilience initiatives. We help organizations transform climate commitments into practical, evidence-based action across Indonesia's coastlines.", null],
            ['about', 'about_tab2_title', 'Tab 2 Title', 'text', 'Our Mission', null],
            ['about', 'about_tab2_list', 'Tab 2 List', 'textarea', "Assess coastal risks using evidence-based methods\nDesign integrated restoration and resilience solutions\nImplement CSR and ESG initiatives with local communities and partners\nMeasure and communicate environmental and social impact transparently\nEmpower green talent and coastal communities through capacity building", 'One bullet point per line.'],
            ['about', 'about_tab3_title', 'Tab 3 Title', 'text', 'Our Vision', null],
            ['about', 'about_tab3_text', 'Tab 3 Text', 'textarea', "To become Indonesia's trusted coastal climate solutions partner for resilient ecosystems and empowered coastal communities.", null],
            ['about', 'about_rating_text', 'Rating Text', 'text', 'Excellent 4.9 out of 5', null],

            ['achievements', 'achievements_title', 'Section Heading', 'text', 'Company Achievements', null],

            ['newsletter', 'newsletter_title', 'Newsletter Heading', 'text', 'Get interesting news', null],
            ['newsletter', 'newsletter_text', 'Newsletter Text', 'text', 'Sign up to get the latest updates!', null],

            ['comments', 'comments_auto_approve', 'Publish Comments Immediately', 'boolean', '0', 'When off, new comments wait for your approval before showing on the site.'],
        ];

        foreach ($settings as $index => [$group, $key, $label, $type, $value, $help]) {
            Setting::firstOrCreate(
                ['key' => $key],
                ['group' => $group, 'label' => $label, 'type' => $type, 'value' => $value, 'help' => $help, 'order' => $index]
            );
        }

        $achievements = [
            [98, '%', 'Company Success', 1],
            [10, '+', 'Company Strategies', 2],
            [3, '+', 'Company Services', 3],
            [15, '+', 'Team Members', 4],
        ];

        foreach ($achievements as [$value, $suffix, $label, $order]) {
            Achievement::firstOrCreate(['label' => $label], [
                'value' => $value,
                'suffix' => $suffix,
                'order' => $order,
            ]);
        }
    }
}
