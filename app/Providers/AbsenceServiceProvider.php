<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AbsenceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Contracts\AbsenceInterface',
            'App\Repositories\AbsenceRepository'
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
