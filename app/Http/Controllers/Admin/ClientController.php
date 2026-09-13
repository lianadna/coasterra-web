<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use App\Models\Project;

class ClientController extends CrudController
{
    protected function model(): string
    {
        return Client::class;
    }

    protected function routeName(): string
    {
        return 'admin.clients';
    }

    protected function label(): string
    {
        return 'Client';
    }

    protected function with(): array
    {
        return ['project'];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'name', 'label' => 'Name', 'type' => 'text', 'rules' => ['required', 'string', 'max:255'], 'half' => true],
            ['name' => 'project_id', 'label' => 'Project', 'type' => 'select', 'rules' => ['required', 'exists:projects,id'], 'half' => true,
                'relation' => ['model' => Project::class, 'label' => 'title', 'name' => 'project']],
            ['name' => 'start_date', 'label' => 'Start Date', 'type' => 'datetime', 'rules' => ['nullable', 'date'], 'half' => true],
            ['name' => 'end_date', 'label' => 'End Date', 'type' => 'datetime', 'rules' => ['nullable', 'date', 'after_or_equal:start_date'], 'half' => true],
            ['name' => 'budget', 'label' => 'Budget', 'type' => 'money', 'rules' => ['nullable', 'integer', 'min:0'], 'half' => true],
            ['name' => 'location', 'label' => 'Location', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:255'], 'half' => true],
        ];
    }
}
