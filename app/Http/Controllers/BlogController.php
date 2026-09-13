<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogDetails(?Blog $blog = null)
    {
        // Older links point at /blog-details with no id, so fall back to the
        // most recent post rather than 404.
        $blog ??= Blog::with(['category', 'author'])->latest()->first();

        return view('blog.blogDetails', [
            'blog' => $blog,
            'recentPosts' => Blog::where('id', '!=', $blog?->id)->latest()->take(4)->get(),
            'categories' => Category::withCount('blogs')->orderBy('title')->get(),
        ]);
    }

    public function blogGrid(Request $request)
    {
        return view('blog.blogGrid', $this->listing($request));
    }

    public function blogStandard(Request $request)
    {
        return view('blog.blogStandard', $this->listing($request));
    }

    /**
     * Shared listing data for both blog layouts.
     */
    private function listing(Request $request): array
    {
        $query = Blog::with(['category', 'author'])->latest();

        if ($categoryId = $request->query('category')) {
            $query->where('category_id', $categoryId);
        }

        if ($search = trim((string) $request->query('q', ''))) {
            $query->where('title', 'like', "%{$search}%");
        }

        return [
            'blogs' => $query->paginate(9)->withQueryString(),
            'categories' => Category::withCount('blogs')->orderBy('title')->get(),
            'recentPosts' => Blog::latest()->take(4)->get(),
            'activeCategory' => $categoryId,
            'search' => $search,
        ];
    }
}
