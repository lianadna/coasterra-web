<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Store a message sent from the landing page contact form. It shows up in
     * the admin panel under Messages.
     */
    public function store(Request $request)
    {
        $validated = $request->validateWithBag('contact', [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'number' => ['nullable', 'string', 'max:50'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        Contact::create($validated);

        return back()
            ->with('contact_success', 'Thank you! Your message has been sent, we will get back to you soon.')
            ->withFragment('contact-form');
    }
}
