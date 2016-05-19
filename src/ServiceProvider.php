<?php

namespace PurpleObject\Transfer;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes(array(
            __DIR__.'/../../config/transfersh.php' => config_path('transfersh.php')
        ));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

        $app = $this->app;

        $this->mergeConfigFrom(
            __DIR__.'/../../config/transfersh.php',
            'transfersh'
        );

        $app['transfer'] = $app->share(function ($app) {
            return new Transfer();
        });

        $app->alias('transfer', 'PurpleObject\Transfer\Transfer');


    }



}