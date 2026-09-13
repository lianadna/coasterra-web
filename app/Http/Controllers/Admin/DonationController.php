<?php

namespace App\Http\Controllers\Admin;

use App\Models\Camping;
use App\Models\Donation;
use App\Models\Donatur;

class DonationController extends CrudController
{
    protected function model(): string
    {
        return Donation::class;
    }

    protected function routeName(): string
    {
        return 'admin.donations';
    }

    protected function label(): string
    {
        return 'Donation';
    }

    protected function with(): array
    {
        return ['camping', 'donor'];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'camping_id', 'label' => 'Campaign', 'type' => 'select', 'rules' => ['required', 'exists:campings,id'], 'half' => true,
                'relation' => ['model' => Camping::class, 'label' => 'title', 'name' => 'camping']],
            ['name' => 'donor_id', 'label' => 'Donor', 'type' => 'select', 'rules' => ['nullable', 'exists:donaturs,id'], 'half' => true,
                'relation' => ['model' => Donatur::class, 'label' => 'name', 'name' => 'donor']],
            ['name' => 'amount', 'label' => 'Amount', 'type' => 'money', 'rules' => ['required', 'integer', 'min:0'], 'half' => true],
            ['name' => 'date', 'label' => 'Date', 'type' => 'datetime', 'rules' => ['nullable', 'date'], 'half' => true],
            ['name' => 'status', 'label' => 'Status', 'type' => 'select', 'rules' => ['required', 'in:SUCCESS,PENDING,FAILED'],
                'options' => ['PENDING' => 'Pending', 'SUCCESS' => 'Success', 'FAILED' => 'Failed']],
        ];
    }
}
