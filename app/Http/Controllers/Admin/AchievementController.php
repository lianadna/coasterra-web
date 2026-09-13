<?php

namespace App\Http\Controllers\Admin;

use App\Models\Achievement;

class AchievementController extends CrudController
{
    protected function model(): string
    {
        return Achievement::class;
    }

    protected function routeName(): string
    {
        return 'admin.achievements';
    }

    protected function label(): string
    {
        return 'Achievement';
    }

    protected function orderBy(): array
    {
        return ['order', 'asc'];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'label', 'label' => 'Label', 'type' => 'text', 'rules' => ['required', 'string', 'max:255'], 'help' => 'e.g. Team Members'],
            ['name' => 'value', 'label' => 'Number', 'type' => 'number', 'rules' => ['required', 'integer', 'min:0'], 'half' => true],
            ['name' => 'suffix', 'label' => 'Suffix', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:10'], 'half' => true, 'help' => 'e.g. % or +'],
            ['name' => 'order', 'label' => 'Order', 'type' => 'number', 'rules' => ['required', 'integer', 'min:0'], 'half' => true, 'help' => 'Lower number shows first.'],
        ];
    }
}
