<?php

namespace Julfiker\Swagger;

use Illuminate\Support\ServiceProvider;

class SwaggerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
        $this->loadViewsFrom(__DIR__.'/views', 'doc');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/julfiker/swagger'),
            __DIR__.'/assets' => base_path('public/assets'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('Julfiker\Swagger\DocController');

    }
}
