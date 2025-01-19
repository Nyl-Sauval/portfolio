<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;


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


public function boot()
{
    // Si l'application est en production, forcer l'utilisation de HTTPS
    if (config('app.env') === 'production') {
        URL::forceScheme('https');
    }
}

}
