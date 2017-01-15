<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\State;

class StateServiceProvider extends ServiceProvider
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
        $this->app->singleton(State::class, function($app) {
          return new State();
        });
    }
}
