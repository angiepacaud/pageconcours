<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind(
        // 'App\Gestion\TexteGestionInterface', 
        // 'App\Gestion\TexteGestion'
        // );

        $this->app->bind(
        'App\Gestion\FileGestionInterface', 
        'App\Gestion\FileGestion'
        );
    }
}
