<?php

namespace App\Http\Controllers\Admin;

use App\Models\Camping;
use App\Models\Event;
use App\Models\Organizer;

class EventController extends CrudController
{
    protected function model(): string
    {
        return Event::class;
    }

    protected function routeName(): string
    {
        return 'admin.events';
    }

    protected function label(): string
    {
        return 'Event';
    }

    protected function with(): array
    {
        return ['camping', 'organizer'];
    }

    protected function orderBy(): array
    {
        return ['schedule', 'asc'];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'rules' => ['required', 'string', 'max:255']],
            ['name' => 'camping_id', 'label' => 'Campaign', 'type' => 'select', 'rules' => ['nullable', 'exists:campings,id'], 'half' => true,
                'relation' => ['model' => Camping::class, 'label' => 'title', 'name' => 'camping']],
            ['name' => 'organizer_id', 'label' => 'Organizer', 'type' => 'select', 'rules' => ['nullable', 'exists:organizers,id'], 'half' => true,
                'relation' => ['model' => Organizer::class, 'label' => 'name', 'name' => 'organizer']],
            ['name' => 'schedule', 'label' => 'Schedule', 'type' => 'datetime', 'rules' => ['nullable', 'date'], 'half' => true],
            ['name' => 'location', 'label' => 'Location', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:255'], 'half' => true],
        ];
    }
}
