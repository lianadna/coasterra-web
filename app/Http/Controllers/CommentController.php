<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Camping;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /** Short names accepted in the URL, mapped to their model. */
    private const SUBJECTS = [
        'blog' => Blog::class,
        'camping' => Camping::class,
    ];

    /**
     * Store a comment left on a blog post or a campaign.
     */
    public function store(Request $request, string $subject, int $id)
    {
        abort_unless(isset(self::SUBJECTS[$subject]), 404);

        $model = self::SUBJECTS[$subject]::findOrFail($id);

        $validated = $request->validateWithBag('comment', [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        $autoApprove = setting('comments_auto_approve', '0') === '1';

        $model->comments()->create([
            ...$validated,
            'status' => $autoApprove ? 'approved' : 'pending',
        ]);

        return back()->with(
            'comment_success',
            $autoApprove
                ? 'Thank you! Your comment has been posted.'
                : 'Thank you! Your comment has been sent and will appear once reviewed.'
        )->withFragment('comment-form');
    }
}
