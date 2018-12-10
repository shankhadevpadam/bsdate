<?php

namespace Shankhadev\Bsdate;

use Illuminate\Support\ServiceProvider;

class BsdateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('bsdate', function ($app) {
            return new \Shankhadev\Bsdate\Bsdate($app->make('Shankhadev\Bsdate\Bsdate'));
        });
    }
}
