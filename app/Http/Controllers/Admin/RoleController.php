<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    private function authorizeModule(): void
    {
        abort_unless(request()->user()?->can('manage roles'), 403);
    }

    public function index()
    {
        $this->authorizeModule();

        return view('admin.roles.index', [
            'roles' => Role::withCount(['permissions', 'users'])->orderBy('name')->paginate(15),
        ]);
    }

    public function create()
    {
        $this->authorizeModule();

        return view('admin.roles.form', [
            'role' => null,
            'permissions' => Permission::orderBy('name')->get(),
            'assigned' => [],
        ]);
    }

    public function store(Request $request)
    {
        $this->authorizeModule();

        $validated = $this->validated($request);

        $role = Role::create(['name' => $validated['name'], 'guard_name' => 'web']);
        $role->syncPermissions($validated['permissions'] ?? []);

        return redirect()->route('admin.roles.index')
            ->with('success', "Role {$role->name} has been created.");
    }

    public function edit(Role $role)
    {
        $this->authorizeModule();

        return view('admin.roles.form', [
            'role' => $role,
            'permissions' => Permission::orderBy('name')->get(),
            'assigned' => $role->permissions->pluck('name')->all(),
        ]);
    }

    public function update(Request $request, Role $role)
    {
        $this->authorizeModule();

        $validated = $this->validated($request, $role);

        $role->update(['name' => $validated['name']]);
        $role->syncPermissions($validated['permissions'] ?? []);

        return redirect()->route('admin.roles.index')
            ->with('success', "Role {$role->name} has been updated.");
    }

    public function destroy(Role $role)
    {
        $this->authorizeModule();

        if ($role->name === 'Admin') {
            return back()->with('error', 'The Admin role cannot be deleted.');
        }

        if ($role->users()->exists()) {
            return back()->with('error', "Role {$role->name} is still assigned to one or more users.");
        }

        $name = $role->name;
        $role->delete();

        return back()->with('success', "Role {$name} has been deleted.");
    }

    private function validated(Request $request, ?Role $role = null): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:255', Rule::unique('roles', 'name')->ignore($role?->id)],
            'permissions' => ['array'],
            'permissions.*' => ['string', 'exists:permissions,name'],
        ]);
    }
}
