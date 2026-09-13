<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;

class SliderController extends CrudController
{
    protected function model(): string
    {
        return Slider::class;
    }

    protected function routeName(): string
    {
        return 'admin.sliders';
    }

    protected function label(): string
    {
        return 'Slider';
    }

    protected function orderBy(): array
    {
        return ['order', 'asc'];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'image', 'label' => 'Image', 'type' => 'image', 'rules' => ['nullable', 'image', 'max:4096']],
            ['name' => 'label', 'label' => 'Label', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:255'], 'half' => true, 'help' => 'Small text above the title.'],
            ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'rules' => ['required', 'string', 'max:255'], 'half' => true],
            ['name' => 'description', 'label' => 'Description', 'type' => 'textarea', 'rules' => ['nullable', 'string'], 'list' => false],
            ['name' => 'order', 'label' => 'Order', 'type' => 'number', 'rules' => ['required', 'integer', 'min:0'], 'half' => true, 'help' => 'Lower number shows first.'],
            ['name' => 'status', 'label' => 'Status', 'type' => 'select', 'rules' => ['required', 'in:active,draft'], 'half' => true,
                'options' => ['active' => 'Active', 'draft' => 'Draft']],
        ];
    }
}
