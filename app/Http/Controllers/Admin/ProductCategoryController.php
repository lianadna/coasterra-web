<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProductCategory;

class ProductCategoryController extends CrudController
{
    protected function model(): string
    {
        return ProductCategory::class;
    }

    protected function routeName(): string
    {
        return 'admin.product-categories';
    }

    protected function label(): string
    {
        return 'Product Category';
    }

    protected function orderBy(): array
    {
        return ['name', 'asc'];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'name', 'label' => 'Name', 'type' => 'text', 'rules' => ['required', 'string', 'max:255']],
            ['name' => 'description', 'label' => 'Description', 'type' => 'textarea', 'rules' => ['nullable', 'string']],
        ];
    }
}
