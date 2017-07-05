<?php

namespace BatyukovArt\CrudGeneratorTemplates;

use Illuminate\Support\ServiceProvider;

class CrudGeneratorTemplatesProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->publishes([
            __DIR__ . '/../config/crudgenerator.php' => config_path('crudgenerator.php'),
        ]);


        $this->publishes([
            __DIR__ . '/templates/' => base_path('resources/crud-generator/'),
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
    }
}
