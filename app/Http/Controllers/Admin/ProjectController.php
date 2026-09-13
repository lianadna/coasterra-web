<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Project;

class ProjectController extends CrudController
{
    protected function model(): string
    {
        return Project::class;
    }

    protected function routeName(): string
    {
        return 'admin.projects';
    }

    protected function label(): string
    {
        return 'Project';
    }

    protected function with(): array
    {
        return ['category'];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'image', 'label' => 'Image', 'type' => 'image', 'rules' => ['nullable', 'image', 'max:4096']],
            ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'rules' => ['required', 'string', 'max:255'], 'half' => true],
            ['name' => 'category_id', 'label' => 'Category', 'type' => 'select', 'rules' => ['nullable', 'exists:categories,id'], 'half' => true,
                'relation' => ['model' => Category::class, 'label' => 'title', 'name' => 'category']],
            ['name' => 'status', 'label' => 'Status', 'type' => 'select', 'rules' => ['required', 'in:done,ongoing,soon'],
                'options' => ['done' => 'Done', 'ongoing' => 'Ongoing', 'soon' => 'Coming Soon']],
            ['name' => 'description', 'label' => 'Description', 'type' => 'textarea', 'rules' => ['nullable', 'string'], 'list' => false],
        ];
    }
}
