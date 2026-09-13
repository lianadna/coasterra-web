<?php

namespace App\Http\Controllers\Admin;

use App\Models\Donation;
use App\Models\Payment;

class PaymentController extends CrudController
{
    protected function model(): string
    {
        return Payment::class;
    }

    protected function routeName(): string
    {
        return 'admin.payments';
    }

    protected function label(): string
    {
        return 'Payment';
    }

    protected function with(): array
    {
        return ['donation'];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'donation_id', 'label' => 'Donation', 'type' => 'select', 'rules' => ['required', 'exists:donations,id'], 'half' => true,
                'relation' => ['model' => Donation::class, 'label' => 'id', 'name' => 'donation']],
            ['name' => 'code', 'label' => 'Reference Code', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:255'], 'half' => true],
            ['name' => 'method', 'label' => 'Method', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:255'], 'half' => true],
            ['name' => 'date', 'label' => 'Date', 'type' => 'datetime', 'rules' => ['nullable', 'date'], 'half' => true],
            ['name' => 'status', 'label' => 'Status', 'type' => 'select', 'rules' => ['required', 'in:SUCCESS,PENDING,FAILED'],
                'options' => ['PENDING' => 'Pending', 'SUCCESS' => 'Success', 'FAILED' => 'Failed']],
        ];
    }
}
