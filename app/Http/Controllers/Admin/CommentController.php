<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    private function authorizeModule(): void
    {
        abort_unless(request()->user()?->can('manage comments'), 403);
    }

    public function index(Request $request)
    {
        $this->authorizeModule();

        $status = $request->query('status');

        $query = Comment::with('commentable')->latest();

        if (in_array($status, ['pending', 'approved'], true)) {
            $query->where('status', $status);
        }

        return view('admin.comments.index', [
            'comments' => $query->paginate(15)->withQueryString(),
            'status' => $status,
            'pendingCount' => Comment::where('status', 'pending')->count(),
        ]);
    }

    /**
     * Publish a comment so visitors can see it.
     */
    public function approve(Comment $comment)
    {
        $this->authorizeModule();

        $comment->update(['status' => 'approved']);

        return back()->with('success', "Comment from {$comment->name} is now published.");
    }

    /**
     * Hide a comment again without deleting it.
     */
    public function unapprove(Comment $comment)
    {
        $this->authorizeModule();

        $comment->update(['status' => 'pending']);

        return back()->with('success', "Comment from {$comment->name} is hidden again.");
    }

    public function destroy(Comment $comment)
    {
        $this->authorizeModule();

        $name = $comment->name;
        $comment->delete();

        return back()->with('success', "Comment from {$name} has been deleted.");
    }
}
