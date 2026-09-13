<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;

class ContactController extends CrudController
{
    protected function model(): string
    {
        return Contact::class;
    }

    protected function routeName(): string
    {
        return 'admin.contacts';
    }

    protected function label(): string
    {
        return 'Message';
    }

    /**
     * Messages arrive from the landing page contact form, so the panel only
     * lists and deletes them.
     */
    protected function canCreate(): bool
    {
        return false;
    }

    protected function fields(): array
    {
        return [
            ['name' => 'name', 'label' => 'Name', 'type' => 'text', 'rules' => ['required', 'string', 'max:255']],
            ['name' => 'email', 'label' => 'Email', 'type' => 'email', 'rules' => ['required', 'email', 'max:255']],
            ['name' => 'number', 'label' => 'Phone', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:50']],
            ['name' => 'message', 'label' => 'Message', 'type' => 'textarea', 'rules' => ['required', 'string']],
            ['name' => 'created_at', 'label' => 'Received', 'type' => 'datetime', 'rules' => ['nullable', 'date']],
        ];
    }
}
