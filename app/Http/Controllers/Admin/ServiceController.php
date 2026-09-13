<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;

class ServiceController extends CrudController
{
    protected function model(): string
    {
        return Service::class;
    }

    protected function routeName(): string
    {
        return 'admin.services';
    }

    protected function label(): string
    {
        return 'Service';
    }

    protected function fields(): array
    {
        return [
            ['name' => 'image', 'label' => 'Image', 'type' => 'image', 'rules' => ['nullable', 'image', 'max:4096']],
            ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'rules' => ['required', 'string', 'max:255'], 'half' => true],
            ['name' => 'subtitle', 'label' => 'Subtitle', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:255'], 'half' => true],
            ['name' => 'description', 'label' => 'Description', 'type' => 'textarea', 'rules' => ['nullable', 'string'], 'list' => false],
            ['name' => 'status', 'label' => 'Status', 'type' => 'select', 'rules' => ['required', 'in:active,soon'],
                'options' => ['active' => 'Active', 'soon' => 'Coming Soon']],
        ];
    }
}
