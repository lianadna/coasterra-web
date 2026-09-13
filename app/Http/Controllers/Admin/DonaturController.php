<?php

namespace App\Http\Controllers\Admin;

use App\Models\Donatur;

class DonaturController extends CrudController
{
    protected function model(): string
    {
        return Donatur::class;
    }

    protected function routeName(): string
    {
        return 'admin.donaturs';
    }

    protected function label(): string
    {
        return 'Donor';
    }

    protected function fields(): array
    {
        return [
            ['name' => 'name', 'label' => 'Name', 'type' => 'text', 'rules' => ['required', 'string', 'max:255']],
            ['name' => 'email', 'label' => 'Email', 'type' => 'email', 'rules' => ['nullable', 'email', 'max:255']],
            ['name' => 'phone', 'label' => 'Phone', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:50']],
        ];
    }
}
