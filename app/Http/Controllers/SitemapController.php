<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Camping;
use App\Models\Project;
use App\Models\Volunteer;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $urls = collect();

        // Static public pages
        $staticRoutes = [
            ['name' => 'index', 'priority' => '1.0', 'changefreq' => 'weekly'],
            ['name' => 'about', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['name' => 'services', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['name' => 'contact', 'priority' => '0.6', 'changefreq' => 'yearly'],
            ['name' => 'blogStandard', 'priority' => '0.7', 'changefreq' => 'weekly'],
            ['name' => 'blogGrid', 'priority' => '0.7', 'changefreq' => 'weekly'],
            ['name' => 'project', 'priority' => '0.7', 'changefreq' => 'weekly'],
            ['name' => 'camping', 'priority' => '0.7', 'changefreq' => 'weekly'],
            ['name' => 'beVolunteer', 'priority' => '0.6', 'changefreq' => 'monthly'],
            ['name' => 'volunteer', 'priority' => '0.7', 'changefreq' => 'weekly'],
            ['name' => 'donations', 'priority' => '0.6', 'changefreq' => 'monthly'],
        ];

        foreach ($staticRoutes as $r) {
            $urls->push([
                'loc' => route($r['name']),
                'lastmod' => now()->toAtomString(),
                'changefreq' => $r['changefreq'],
                'priority' => $r['priority'],
            ]);
        }

        // Dynamic detail pages
        Blog::latest('updated_at')->get()->each(function ($blog) use ($urls) {
            $urls->push([
                'loc' => route('blogDetails', $blog),
                'lastmod' => optional($blog->updated_at)->toAtomString() ?? now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.6',
            ]);
        });

        Project::latest('updated_at')->get()->each(function ($project) use ($urls) {
            $urls->push([
                'loc' => route('projectDetails', $project),
                'lastmod' => optional($project->updated_at)->toAtomString() ?? now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.6',
            ]);
        });

        Camping::latest('updated_at')->get()->each(function ($camping) use ($urls) {
            $urls->push([
                'loc' => route('campingDetails', $camping),
                'lastmod' => optional($camping->updated_at)->toAtomString() ?? now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.6',
            ]);
        });

        Volunteer::latest('updated_at')->get()->each(function ($volunteer) use ($urls) {
            $urls->push([
                'loc' => route('volunteerDetails', $volunteer),
                'lastmod' => optional($volunteer->updated_at)->toAtomString() ?? now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.5',
            ]);
        });

        $xml = view('sitemap', ['urls' => $urls])->render();

        return response($xml, 200)->header('Content-Type', 'text/xml');
    }
}