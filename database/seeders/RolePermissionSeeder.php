<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    /**
     * Every admin module gets one "manage <module>" permission. The Admin role
     * receives all of them; Editor is limited to landing page content.
     */
    public const MODULES = [
        'users', 'roles', 'sliders', 'services', 'testimonis', 'partners',
        'volunteers', 'categories', 'blogs', 'projects', 'clients', 'campings',
        'organizers', 'events', 'donaturs', 'donations', 'payments',
        'product-categories', 'products', 'contacts', 'settings',
        'achievements', 'comments', 'subscribers',
    ];

    public const CONTENT_MODULES = [
        'sliders', 'services', 'testimonis', 'partners', 'volunteers',
        'categories', 'blogs', 'projects', 'clients', 'contacts',
        'settings', 'achievements', 'comments', 'subscribers',
    ];

    public function run(): void
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        foreach (self::MODULES as $module) {
            Permission::firstOrCreate(['name' => "manage {$module}", 'guard_name' => 'web']);
        }

        $admin = Role::firstOrCreate(['name' => 'Admin', 'guard_name' => 'web']);
        $admin->syncPermissions(Permission::all());

        $editor = Role::firstOrCreate(['name' => 'Editor', 'guard_name' => 'web']);
        $editor->syncPermissions(
            Permission::whereIn(
                'name',
                array_map(fn ($module) => "manage {$module}", self::CONTENT_MODULES)
            )->get()
        );

        // Anyone who could already sign in keeps full access.
        User::doesntHave('roles')->each(fn (User $user) => $user->assignRole($admin));
    }
}
