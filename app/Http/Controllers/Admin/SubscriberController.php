<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subscriber;

class SubscriberController extends CrudController
{
    protected function model(): string
    {
        return Subscriber::class;
    }

    protected function routeName(): string
    {
        return 'admin.subscribers';
    }

    protected function label(): string
    {
        return 'Subscriber';
    }

    /**
     * Subscribers sign up from the landing page, so the panel only lists them.
     */
    protected function canCreate(): bool
    {
        return false;
    }

    protected function fields(): array
    {
        return [
            ['name' => 'email', 'label' => 'Email', 'type' => 'email', 'rules' => ['required', 'email', 'max:255']],
            ['name' => 'status', 'label' => 'Status', 'type' => 'select', 'rules' => ['required', 'in:subscribed,unsubscribed'],
                'options' => ['subscribed' => 'Subscribed', 'unsubscribed' => 'Unsubscribed']],
            ['name' => 'created_at', 'label' => 'Joined', 'type' => 'datetime', 'rules' => ['nullable', 'date']],
        ];
    }
}
