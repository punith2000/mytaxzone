<?php

namespace Route\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
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
    // Frontend routes
    Route::middleware('web')
        ->group(base_path('routes/web.php'));

    // Backend routes
    Route::middleware(['web']) // you can add 'auth' or 'admin' middleware here
        ->prefix('admin')
        ->name('admin.')
        ->group(base_path('routes/web.php'));
}
}