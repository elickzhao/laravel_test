<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RiakServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        view()->composer('view', function () {
            //
        });

    }

    /**
     *
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('Riak\Contracts\connection', function ($app) {
            return new Connection(config('riak'));
        });
    }
}
