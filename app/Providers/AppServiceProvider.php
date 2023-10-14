<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->bind('first_service_helper', function ($app) {
            return dd("this is my first service container!");
        });

        App::getFacadeApplication()->bind("second_service_helper", function ($app) {
            return dd("this is my second service container!");
        });

        app()->bind('third_service_helper', function ($app) {
            return dd("this is my third service container!");
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Schema::defaultStringLength(191);
    }
}
