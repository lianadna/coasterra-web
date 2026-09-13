<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Blog;
use App\Models\Camping;
use App\Models\Event;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimoni;
use App\Models\Volunteer;

class HomeController extends Controller
{
    /**
     * The landing page: every section is filled from the admin panel.
     */
    public function index()
    {
        return view('home.index', [
            'achievements' => Achievement::orderBy('order')->get(),
            'sliders' => Slider::active()->orderBy('order')->get(),
            'services' => Service::active()->latest()->take(6)->get(),
            'campings' => Camping::latest()->take(6)->get(),
            'volunteers' => Volunteer::latest()->take(8)->get(),
            'projects' => Project::with('category')->latest()->take(6)->get(),
            'testimonis' => Testimoni::latest()->take(6)->get(),
            'partners' => Partner::latest()->get(),
            'events' => Event::with(['camping', 'organizer'])
                ->orderByRaw('schedule IS NULL, schedule ASC')
                ->take(4)
                ->get(),
            'blogs' => Blog::with(['category', 'author'])->latest()->take(6)->get(),
        ]);
    }

    public function about()
    {
        return view('about', [
            'volunteers' => Volunteer::latest()->take(8)->get(),
            'testimonis' => Testimoni::latest()->take(6)->get(),
            'partners' => Partner::latest()->get(),
        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function services()
    {
        return view('services', [
            'services' => Service::active()->latest()->get(),
        ]);
    }
}
