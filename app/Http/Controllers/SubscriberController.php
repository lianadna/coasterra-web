<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    /**
     * Sign a visitor up to the newsletter list.
     */
    public function store(Request $request)
    {
        $validated = $request->validateWithBag('newsletter', [
            'email' => ['required', 'email', 'max:255'],
        ]);

        // Re-subscribing an existing address should not look like an error.
        Subscriber::updateOrCreate(
            ['email' => $validated['email']],
            ['status' => 'subscribed']
        );

        return back()->with('newsletter_success', 'Thank you for subscribing!');
    }
}
