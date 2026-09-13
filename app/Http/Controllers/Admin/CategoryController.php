<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;

class CategoryController extends CrudController
{
    protected function model(): string
    {
        return Category::class;
    }

    protected function routeName(): string
    {
        return 'admin.categories';
    }

    protected function label(): string
    {
        return 'Category';
    }

    protected function orderBy(): array
    {
        return ['title', 'asc'];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'rules' => ['required', 'string', 'max:255']],
            ['name' => 'description', 'label' => 'Description', 'type' => 'textarea', 'rules' => ['nullable', 'string']],
        ];
    }
}
