<?php

namespace YourNamespace\FortifyUIPreset;

use Illuminate\Support\ServiceProvider;
use YourNamespace\FortifyUIPreset\Commands\FortifyUIPresetCommand;

class FortifyUIPresetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../stubs/resources/views' => base_path('resources/views'),
            ], 'resources');

            $this->commands([
                FortifyUIPresetCommand::class,
            ]);
        }
    }
}
