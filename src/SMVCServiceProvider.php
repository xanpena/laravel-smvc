<?php

namespace Xanpena\SMVC;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Xanpena\SMVC\Console\InstallCommand;
use Xanpena\SMVC\Console\MakeCommand;
use Xanpena\SMVC\Console\PublishCommand;

class SMVCServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register() : void {

    }

    /**
     * Bootstrap services.
     */
    public function boot() : void {

        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('schemas.php'),
            ], 'smvc-config');

            $this->publishes([
                __DIR__.'/Http/Controllers/SMVCController.php' => app_path('Http/Controllers/SMVCController.php'),
            ], 'smvc-controller');

            $this->publishes([
                __DIR__.'/Http/Traits' => app_path('Http/Traits'),
            ], 'smvc-traits');

            $this->publishes([
                __DIR__.'/stubs' => app_path('stubs'),
            ], 'smvc-traits');


            // Registering package commands.
            $this->commands([
                InstallCommand::class,
                MakeCommand::class,
                PublishCommand::class
            ]);
        }
    }

}
