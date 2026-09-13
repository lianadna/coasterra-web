<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Seeders\RolePermissionSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class RolePermissionTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(RolePermissionSeeder::class);
    }

    private function user(string $email = 'admin@gmail.com'): User
    {
        return User::create([
            'name' => 'Admin',
            'email' => $email,
            'password' => Hash::make('12345678'),
        ]);
    }

    public function test_seeder_creates_roles_and_gives_existing_users_admin(): void
    {
        $this->assertNotNull(Role::firstWhere('name', 'Admin'));
        $this->assertNotNull(Role::firstWhere('name', 'Editor'));

        $user = $this->user();
        $this->seed(RolePermissionSeeder::class);

        $this->assertTrue($user->fresh()->hasRole('Admin'));
    }

    public function test_admin_role_reaches_every_module(): void
    {
        $admin = $this->user();
        $admin->assignRole('Admin');
        $this->actingAs($admin);

        foreach (['users', 'roles', 'sliders', 'blogs', 'donations', 'products'] as $module) {
            $this->get("/admin/{$module}")->assertOk();
        }
    }

    public function test_editor_can_reach_content_but_not_users_or_roles(): void
    {
        $editor = $this->user('editor@example.com');
        $editor->assignRole('Editor');
        $this->actingAs($editor);

        $this->get('/admin/sliders')->assertOk();
        $this->get('/admin/blogs')->assertOk();

        $this->get('/admin/users')->assertForbidden();
        $this->get('/admin/roles')->assertForbidden();
        $this->get('/admin/donations')->assertForbidden();
        $this->get('/admin/products')->assertForbidden();
    }

    public function test_editor_cannot_write_to_a_forbidden_module(): void
    {
        $editor = $this->user('editor@example.com');
        $editor->assignRole('Editor');
        $this->actingAs($editor);

        $this->get('/admin/products/create')->assertForbidden();
        $this->post('/admin/products', ['name' => 'X', 'price' => 1, 'stock_qty' => 1])->assertForbidden();
    }

    public function test_user_without_any_role_cannot_open_modules(): void
    {
        $this->actingAs($this->user('nobody@example.com'));

        $this->get('/admin/sliders')->assertForbidden();
        $this->get('/admin/users')->assertForbidden();
    }

    public function test_admin_can_create_a_role_with_permissions(): void
    {
        $admin = $this->user();
        $admin->assignRole('Admin');
        $this->actingAs($admin);

        $this->post('/admin/roles', [
            'name' => 'Blog Writer',
            'permissions' => ['manage blogs', 'manage categories'],
        ])->assertRedirect(route('admin.roles.index'));

        $role = Role::firstWhere('name', 'Blog Writer');
        $this->assertNotNull($role);
        $this->assertEqualsCanonicalizing(
            ['manage blogs', 'manage categories'],
            $role->permissions->pluck('name')->all()
        );
    }

    public function test_admin_role_cannot_be_deleted(): void
    {
        $admin = $this->user();
        $admin->assignRole('Admin');
        $this->actingAs($admin);

        $role = Role::firstWhere('name', 'Admin');

        $this->from('/admin/roles')->delete("/admin/roles/{$role->id}")
            ->assertRedirect('/admin/roles')
            ->assertSessionHas('error');

        $this->assertNotNull(Role::firstWhere('name', 'Admin'));
    }

    public function test_a_role_still_assigned_to_a_user_cannot_be_deleted(): void
    {
        $admin = $this->user();
        $admin->assignRole('Admin');
        $editor = $this->user('editor@example.com');
        $editor->assignRole('Editor');

        $this->actingAs($admin);
        $role = Role::firstWhere('name', 'Editor');

        $this->from('/admin/roles')->delete("/admin/roles/{$role->id}")
            ->assertSessionHas('error');

        $this->assertNotNull(Role::firstWhere('name', 'Editor'));
    }

    public function test_admin_can_assign_a_role_when_creating_a_user(): void
    {
        $admin = $this->user();
        $admin->assignRole('Admin');
        $this->actingAs($admin);

        $this->post('/admin/users', [
            'name' => 'Staff',
            'email' => 'staff@example.com',
            'password' => 'secret12345',
            'password_confirmation' => 'secret12345',
            'roles' => ['Editor'],
        ])->assertRedirect(route('admin.users.index'));

        $this->assertTrue(User::firstWhere('email', 'staff@example.com')->hasRole('Editor'));
    }

    public function test_admin_cannot_strip_their_own_role(): void
    {
        $admin = $this->user();
        $admin->assignRole('Admin');
        $this->actingAs($admin);

        $this->put("/admin/users/{$admin->id}", [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'roles' => [],
        ])->assertRedirect(route('admin.users.index'));

        $this->assertTrue($admin->fresh()->hasRole('Admin'));
    }
}
