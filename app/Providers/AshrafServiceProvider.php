<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AshrafServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $data = array();
        $data['a'] = 20;
        $data['b'] = 30;
        $data['c'] = 40;
        view()->share("numbers", $data);
    }
}
