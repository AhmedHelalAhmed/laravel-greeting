<?php

namespace AhmedHelalAhmed\LaravelGreeting;

use Illuminate\Support\ServiceProvider;

/**
 * Class LaravelGreetingServiceProvider
 * @package AhmedHelalAhmed\LaravelGreeting
 * @author Ahmed Helal Ahmed
 */
class LaravelGreetingServiceProvider extends ServiceProvider
{
    // bootstrap web services
    // listen for events
    // publish configuration files or database migrations
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/greeting.php'=>config_path('greeting.php')
        ]);
    }

    // extend functionality from other classes
    // register service providers
    // create singleton classes
    public function register()
    {
        $this->app->singleton(Greeting::class, function () {
            return new Greeting();
        });
    }
}
