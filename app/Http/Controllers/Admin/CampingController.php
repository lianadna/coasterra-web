<?php

namespace App\Http\Controllers\Admin;

use App\Models\Camping;

class CampingController extends CrudController
{
    protected function model(): string
    {
        return Camping::class;
    }

    protected function routeName(): string
    {
        return 'admin.campings';
    }

    protected function label(): string
    {
        return 'Campaign';
    }

    protected function fields(): array
    {
        return [
            ['name' => 'image', 'label' => 'Image', 'type' => 'image', 'rules' => ['nullable', 'image', 'max:4096']],
            ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'rules' => ['required', 'string', 'max:255'], 'half' => true],
            ['name' => 'subtitle', 'label' => 'Subtitle', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:255'], 'half' => true, 'list' => false],
            ['name' => 'category', 'label' => 'Category', 'type' => 'select', 'rules' => ['required', 'in:plant,community'], 'half' => true,
                'options' => ['plant' => 'Plant', 'community' => 'Community']],
            ['name' => 'target', 'label' => 'Donation Target', 'type' => 'money', 'rules' => ['required', 'integer', 'min:0'], 'half' => true],
            ['name' => 'start_date', 'label' => 'Start Date', 'type' => 'datetime', 'rules' => ['nullable', 'date'], 'half' => true],
            ['name' => 'end_date', 'label' => 'End Date', 'type' => 'datetime', 'rules' => ['nullable', 'date', 'after_or_equal:start_date'], 'half' => true],
            ['name' => 'description', 'label' => 'Description', 'type' => 'textarea', 'rules' => ['nullable', 'string'], 'list' => false],
        ];
    }
}
