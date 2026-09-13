<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\ProductCategory;

class ProductController extends CrudController
{
    protected function model(): string
    {
        return Product::class;
    }

    protected function routeName(): string
    {
        return 'admin.products';
    }

    protected function label(): string
    {
        return 'Product';
    }

    protected function with(): array
    {
        return ['category'];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'name', 'label' => 'Name', 'type' => 'text', 'rules' => ['required', 'string', 'max:255'], 'half' => true],
            ['name' => 'category_id', 'label' => 'Category', 'type' => 'select', 'rules' => ['nullable', 'exists:product_categories,id'], 'half' => true,
                'relation' => ['model' => ProductCategory::class, 'label' => 'name', 'name' => 'category']],
            ['name' => 'price', 'label' => 'Price', 'type' => 'money', 'rules' => ['required', 'numeric', 'min:0'], 'half' => true, 'step' => '0.01'],
            ['name' => 'stock_qty', 'label' => 'Stock', 'type' => 'number', 'rules' => ['required', 'integer', 'min:0'], 'half' => true],
            ['name' => 'description', 'label' => 'Description', 'type' => 'textarea', 'rules' => ['nullable', 'string'], 'list' => false],
        ];
    }
}
