<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimoni;

class TestimoniController extends CrudController
{
    protected function model(): string
    {
        return Testimoni::class;
    }

    protected function routeName(): string
    {
        return 'admin.testimonis';
    }

    protected function label(): string
    {
        return 'Testimonial';
    }

    protected function fields(): array
    {
        return [
            ['name' => 'image', 'label' => 'Photo', 'type' => 'image', 'rules' => ['nullable', 'image', 'max:4096']],
            ['name' => 'name', 'label' => 'Name', 'type' => 'text', 'rules' => ['required', 'string', 'max:255'], 'half' => true],
            ['name' => 'role', 'label' => 'Role', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:255'], 'half' => true],
            ['name' => 'rating', 'label' => 'Rating', 'type' => 'number', 'rules' => ['required', 'numeric', 'min:0', 'max:5'], 'half' => true, 'step' => '0.1'],
            ['name' => 'video', 'label' => 'Video URL', 'type' => 'url', 'rules' => ['nullable', 'url', 'max:255'], 'half' => true, 'list' => false],
            ['name' => 'description', 'label' => 'Testimonial', 'type' => 'textarea', 'rules' => ['nullable', 'string']],
        ];
    }
}
