<?php

namespace App\Http\Controllers\Admin;

use App\Models\Organizer;

class OrganizerController extends CrudController
{
    protected function model(): string
    {
        return Organizer::class;
    }

    protected function routeName(): string
    {
        return 'admin.organizers';
    }

    protected function label(): string
    {
        return 'Organizer';
    }

    protected function fields(): array
    {
        return [
            ['name' => 'image', 'label' => 'Image', 'type' => 'image', 'rules' => ['nullable', 'image', 'max:4096']],
            ['name' => 'name', 'label' => 'Name', 'type' => 'text', 'rules' => ['required', 'string', 'max:255'], 'half' => true],
            ['name' => 'location', 'label' => 'Location', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:255'], 'half' => true],
            ['name' => 'schedule', 'label' => 'Schedule', 'type' => 'datetime', 'rules' => ['nullable', 'date']],
            ['name' => 'desc', 'label' => 'Description', 'type' => 'textarea', 'rules' => ['nullable', 'string'], 'list' => false],
        ];
    }
}
