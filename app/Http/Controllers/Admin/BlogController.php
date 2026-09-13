<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends CrudController
{
    protected function model(): string
    {
        return Blog::class;
    }

    protected function routeName(): string
    {
        return 'admin.blogs';
    }

    protected function label(): string
    {
        return 'Blog Post';
    }

    protected function with(): array
    {
        return ['author', 'category'];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'image', 'label' => 'Cover', 'type' => 'image', 'rules' => ['nullable', 'image', 'max:4096']],
            ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'rules' => ['required', 'string', 'max:255']],
            ['name' => 'category_id', 'label' => 'Category', 'type' => 'select', 'rules' => ['nullable', 'exists:categories,id'], 'half' => true,
                'relation' => ['model' => Category::class, 'label' => 'title', 'name' => 'category']],
            ['name' => 'user_id', 'label' => 'Author', 'type' => 'select', 'rules' => ['nullable', 'exists:users,id'], 'half' => true,
                'relation' => ['model' => User::class, 'label' => 'name', 'name' => 'author']],
            ['name' => 'description', 'label' => 'Content', 'type' => 'textarea', 'rules' => ['nullable', 'string'], 'rows' => 10, 'list' => false],
        ];
    }

    /**
     * Default the author to whoever is writing the post.
     */
    public function store(Request $request)
    {
        $request->merge(['user_id' => $request->input('user_id') ?: $request->user()->id]);

        return parent::store($request);
    }
}
