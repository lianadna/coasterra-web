<?php

namespace App\Http\Controllers\Admin;

use App\Models\Volunteer;

class VolunteerController extends CrudController
{
    protected function model(): string
    {
        return Volunteer::class;
    }

    protected function routeName(): string
    {
        return 'admin.volunteers';
    }

    protected function label(): string
    {
        return 'Volunteer';
    }

    protected function fields(): array
    {
        return [
            ['name' => 'image', 'label' => 'Photo', 'type' => 'image', 'rules' => ['nullable', 'image', 'max:4096']],
            ['name' => 'name', 'label' => 'Name', 'type' => 'text', 'rules' => ['required', 'string', 'max:255'], 'half' => true],
            ['name' => 'role', 'label' => 'Role', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:255'], 'half' => true],
            ['name' => 'instagram_url', 'label' => 'Instagram URL', 'type' => 'url', 'rules' => ['nullable', 'url', 'max:255'], 'half' => true, 'list' => false],
            ['name' => 'linkedin_url', 'label' => 'LinkedIn URL', 'type' => 'url', 'rules' => ['nullable', 'url', 'max:255'], 'half' => true, 'list' => false],
            ['name' => 'summary', 'label' => 'Summary', 'type' => 'textarea', 'rules' => ['nullable', 'string']],
        ];
    }
}
