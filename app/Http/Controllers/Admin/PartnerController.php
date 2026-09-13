<?php

namespace App\Http\Controllers\Admin;

use App\Models\Partner;

class PartnerController extends CrudController
{
    protected function model(): string
    {
        return Partner::class;
    }

    protected function routeName(): string
    {
        return 'admin.partners';
    }

    protected function label(): string
    {
        return 'Partner';
    }

    protected function fields(): array
    {
        return [
            ['name' => 'image', 'label' => 'Logo', 'type' => 'image', 'rules' => ['nullable', 'image', 'max:4096']],
            ['name' => 'name', 'label' => 'Name', 'type' => 'text', 'rules' => ['required', 'string', 'max:255']],
            ['name' => 'description', 'label' => 'Description', 'type' => 'textarea', 'rules' => ['nullable', 'string']],
        ];
    }
}
