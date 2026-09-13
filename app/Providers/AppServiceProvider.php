<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // The admin panel is built on Bootstrap 5, not Tailwind.
        Paginator::useBootstrapFive();

        // The Admin role always has every permission, so a new module cannot
        // accidentally lock the owner out of their own panel.
        Gate::before(fn (User $user) => $user->hasRole('Admin') ? true : null);
    }
}
