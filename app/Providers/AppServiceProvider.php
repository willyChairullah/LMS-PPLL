<?php

namespace App\Providers;

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
        // PENTING: Force HTTPS jika aplikasi berjalan di lingkungan Production (Railway)
        if (app()->environment('production')) {
        URL::forceScheme('https');
        }
    }
}
