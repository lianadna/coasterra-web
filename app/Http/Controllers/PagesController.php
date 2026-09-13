<?php

namespace App\Http\Controllers;

use App\Models\Camping;
use App\Models\Event;
use App\Models\Project;
use App\Models\Service;
use App\Models\Volunteer;

class PagesController extends Controller
{
    public function beVolunteer()
    {
        return view('pages.beVolunteer');
    }

    public function camping()
    {
        return view('pages.camping', [
            'campings' => Camping::latest()->paginate(9),
        ]);
    }

    public function campingDetails(?Camping $camping = null)
    {
        $camping ??= Camping::latest()->first();

        return view('pages.campingDetails', [
            'camping' => $camping,
            'events' => $camping ? $camping->events()->with('organizer')->orderBy('schedule')->get() : collect(),
            'otherCampings' => Camping::where('id', '!=', $camping?->id)->latest()->take(3)->get(),
        ]);
    }

    public function campingDonation(?Camping $camping = null)
    {
        $camping ??= Camping::latest()->first();

        return view('pages.campingDonation', [
            'camping' => $camping,
            'otherCampings' => Camping::where('id', '!=', $camping?->id)->latest()->take(3)->get(),
        ]);
    }

    public function donations()
    {
        return view('pages.donations', [
            'campings' => Camping::latest()->paginate(9),
        ]);
    }

    public function project()
    {
        return view('pages.project', [
            'projects' => Project::with('category')->latest()->paginate(9),
        ]);
    }

    public function projectDetails(?Project $project = null)
    {
        $project ??= Project::with(['category', 'client'])->latest()->first();

        return view('pages.projectDetails', [
            'project' => $project,
            'otherProjects' => Project::where('id', '!=', $project?->id)->latest()->take(3)->get(),
        ]);
    }

    public function servicesDetails(?Service $service = null)
    {
        $service ??= Service::active()->latest()->first();

        return view('pages.servicesDetails', [
            'service' => $service,
            'services' => Service::active()->latest()->get(),
        ]);
    }

    public function volunteer()
    {
        return view('pages.volunteer', [
            'volunteers' => Volunteer::latest()->paginate(12),
        ]);
    }

    public function volunteerDetails(?Volunteer $volunteer = null)
    {
        $volunteer ??= Volunteer::latest()->first();

        return view('pages.volunteerDetails', [
            'volunteer' => $volunteer,
            'otherVolunteers' => Volunteer::where('id', '!=', $volunteer?->id)->latest()->take(4)->get(),
        ]);
    }
}
