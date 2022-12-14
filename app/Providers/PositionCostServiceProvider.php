<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PositionCostServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Contracts\PositionCostInterface',
            'App\Repositories\PositionCostRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
