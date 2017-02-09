<?php

namespace LaravelAdmin\Site;

use Illuminate\Support\ServiceProvider;
use View;

class SiteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('site', function ($app) {
            return new Site();
        });

        View::share('site', $this->app->make('site'));

        $this->publishes([
            __DIR__.'/../resources/config/site.php' => config_path('site.php'),
        ], 'site');

        $this->mergeConfigFrom(
            __DIR__.'/../resources/config/site.php', 'site'
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
