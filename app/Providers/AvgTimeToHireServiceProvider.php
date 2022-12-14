<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AvgTimeToHireServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Contracts\AvgTimeToHireInterface',
            'App\Repositories\AvgTimeToHireRepository'
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
