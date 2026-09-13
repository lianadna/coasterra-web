<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AdminAuthTest extends TestCase
{
    use RefreshDatabase;

    private function admin(): User
    {
        $this->seed(\Database\Seeders\RolePermissionSeeder::class);

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        return $user->assignRole('Admin');
    }

    public function test_seeded_admin_can_log_in(): void
    {
        $this->seed(\Database\Seeders\AdminSeeder::class);

        $response = $this->post('/login', [
            'email' => 'admin@gmail.com',
            'password' => env('ADMIN_PASSWORD'),
        ]);

        $response->assertRedirect(route('dashboard'));
        $this->assertAuthenticated();
    }
    
    public function test_login_fails_with_wrong_password(): void
    {
        $this->admin();

        $response = $this->from('/login')->post('/login', [
            'email' => 'admin@gmail.com',
            'password' => 'wrong-password',
        ]);

        $response->assertRedirect('/login');
        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    public function test_guest_cannot_open_dashboard_or_user_manager(): void
    {
        $this->get('/dashboard')->assertRedirect(route('login'));
        $this->get('/admin/users')->assertRedirect(route('login'));
        $this->get('/admin/users/create')->assertRedirect(route('login'));
    }

    public function test_public_registration_routes_do_not_exist(): void
    {
        $this->get('/register')->assertNotFound();
        $this->post('/register', [])->assertNotFound();
    }

    public function test_admin_can_open_dashboard_and_user_manager(): void
    {
        $this->actingAs($this->admin());

        $this->get('/dashboard')->assertOk()->assertSee('Dashboard');
        $this->get('/admin/users')->assertOk()->assertSee('admin@gmail.com');
        $this->get('/admin/users/create')->assertOk()->assertSee('New Internal Account');
    }

    public function test_admin_can_register_another_internal_admin(): void
    {
        $this->actingAs($this->admin());

        $response = $this->post('/admin/users', [
            'name' => 'Staff Two',
            'email' => 'staff@coasterra.test',
            'password' => 'secret12345',
            'password_confirmation' => 'secret12345',
        ]);

        $response->assertRedirect(route('admin.users.index'));
        $this->assertDatabaseHas('users', ['email' => 'staff@coasterra.test']);

        // and the newly created account can actually sign in
        auth()->logout();
        $this->post('/login', [
            'email' => 'staff@coasterra.test',
            'password' => 'secret12345',
        ])->assertRedirect(route('dashboard'));
        $this->assertAuthenticated();
    }

    public function test_new_admin_password_must_be_confirmed_and_email_unique(): void
    {
        $this->actingAs($this->admin());

        $this->from('/admin/users/create')->post('/admin/users', [
            'name' => 'Mismatch',
            'email' => 'mismatch@coasterra.test',
            'password' => 'secret12345',
            'password_confirmation' => 'different12345',
        ])->assertSessionHasErrors('password');

        $this->from('/admin/users/create')->post('/admin/users', [
            'name' => 'Duplicate',
            'email' => 'admin@gmail.com',
            'password' => 'secret12345',
            'password_confirmation' => 'secret12345',
        ])->assertSessionHasErrors('email');

        $this->assertDatabaseCount('users', 1);
    }

    public function test_admin_can_update_a_user_without_changing_password(): void
    {
        $admin = $this->admin();
        $this->actingAs($admin);

        $this->put("/admin/users/{$admin->id}", [
            'name' => 'Admin Renamed',
            'email' => 'admin@gmail.com',
            'password' => '',
            'password_confirmation' => '',
        ])->assertRedirect(route('admin.users.index'));

        $this->assertDatabaseHas('users', ['name' => 'Admin Renamed']);

        auth()->logout();
        $this->post('/login', [
            'email' => 'admin@gmail.com',
            'password' => '12345678',
        ])->assertRedirect(route('dashboard'));
    }

    public function test_admin_cannot_delete_their_own_account(): void
    {
        $admin = $this->admin();
        $this->actingAs($admin);

        $this->from('/admin/users')->delete("/admin/users/{$admin->id}")
            ->assertRedirect('/admin/users')
            ->assertSessionHas('error');

        $this->assertDatabaseHas('users', ['id' => $admin->id]);
    }

    public function test_admin_can_delete_another_account(): void
    {
        $this->actingAs($this->admin());

        $other = User::create([
            'name' => 'Other',
            'email' => 'other@coasterra.test',
            'password' => Hash::make('secret12345'),
        ]);

        $this->from('/admin/users')->delete("/admin/users/{$other->id}")
            ->assertRedirect('/admin/users')
            ->assertSessionHas('success');

        $this->assertDatabaseMissing('users', ['email' => 'other@coasterra.test']);
    }

    public function test_logged_in_admin_is_redirected_away_from_login_page(): void
    {
        $this->actingAs($this->admin())
            ->get('/login')
            ->assertRedirect('/dashboard');
    }

    public function test_admin_can_log_out(): void
    {
        $this->actingAs($this->admin())
            ->post('/logout')
            ->assertRedirect(route('login'));

        $this->assertGuest();
    }
}
