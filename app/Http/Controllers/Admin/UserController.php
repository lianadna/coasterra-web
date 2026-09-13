<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    private function authorizeModule(): void
    {
        abort_unless(request()->user()?->can('manage users'), 403);
    }

    /**
     * List every internal admin account.
     */
    public function index()
    {
        $this->authorizeModule();

        return view('admin.users.index', [
            'users' => User::with('roles')->latest()->paginate(10),
        ]);
    }

    /**
     * Show the form used to register a new internal admin.
     */
    public function create()
    {
        $this->authorizeModule();

        return view('admin.users.create', [
            'roles' => Role::orderBy('name')->get(),
        ]);
    }

    /**
     * Store a new internal admin.
     */
    public function store(Request $request)
    {
        $this->authorizeModule();

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'roles' => ['array'],
            'roles.*' => ['string', 'exists:roles,name'],
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        $user->syncRoles($validated['roles'] ?? []);

        return redirect()
            ->route('admin.users.index')
            ->with('success', "Admin account for {$validated['email']} has been created.");
    }

    /**
     * Show the edit form for an internal admin.
     */
    public function edit(User $user)
    {
        $this->authorizeModule();

        return view('admin.users.edit', [
            'user' => $user,
            'roles' => Role::orderBy('name')->get(),
            'assigned' => $user->roles->pluck('name')->all(),
        ]);
    }

    /**
     * Update an internal admin. Password is only changed when filled in.
     */
    public function update(Request $request, User $user)
    {
        $this->authorizeModule();

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user->id)],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'roles' => ['array'],
            'roles.*' => ['string', 'exists:roles,name'],
        ]);

        $user->name = $validated['name'];
        $user->email = $validated['email'];

        if (! empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        $user->save();

        // Removing your own Admin role would lock you out of this very page.
        if ($user->id !== Auth::id()) {
            $user->syncRoles($validated['roles'] ?? []);
        }

        return redirect()
            ->route('admin.users.index')
            ->with('success', "Admin account {$user->email} has been updated.");
    }

    /**
     * Delete an internal admin.
     */
    public function destroy(User $user)
    {
        $this->authorizeModule();

        if ($user->id === Auth::id()) {
            return back()->with('error', 'You cannot delete your own account.');
        }

        if (User::count() <= 1) {
            return back()->with('error', 'The last remaining admin account cannot be deleted.');
        }

        $email = $user->email;
        $user->delete();

        return back()->with('success', "Admin account {$email} has been deleted.");
    }
}
