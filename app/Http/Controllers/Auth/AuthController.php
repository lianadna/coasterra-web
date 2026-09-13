<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Camping;
use App\Models\Contact;
use App\Models\Donation;
use App\Models\Event;
use App\Models\Project;
use App\Models\User;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Show login form
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Handle login
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Show dashboard
     */
    public function dashboard()
    {
        return view('admin.dashboard', [
            'stats' => [
                'admins' => User::count(),
                'blogs' => Blog::count(),
                'projects' => Project::count(),
                'campaigns' => Camping::count(),
                'volunteers' => Volunteer::count(),
                'messages' => Contact::count(),
            ],
            'collected' => (int) Donation::where('status', 'SUCCESS')->sum('amount'),
            'pendingDonations' => Donation::where('status', 'PENDING')->count(),
            'latestMessages' => Contact::latest()->take(5)->get(),
            'upcomingEvents' => Event::with('camping')
                ->whereNotNull('schedule')
                ->where('schedule', '>=', now())
                ->orderBy('schedule')
                ->take(5)
                ->get(),
        ]);
    }

    /**
     * Handle logout
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
