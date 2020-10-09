<?php

namespace Pradeep3\FortifyUITailwind;

use Illuminate\Support\ServiceProvider;
use Pradeep3\FortifyUITailwind\Commands\FortifyUITailwindCommand;

class FortifyUITailwindServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                // views
                __DIR__ . '/../stubs/resources/views' => base_path('resources/views'),

                // assets
                __DIR__ . '/../stubs/resources/js' => base_path('resources/js'),
                __DIR__ . '/../stubs/resources/sass' => base_path('resources/sass'),
                
                // package files
                __DIR__ . '/../stubs/.editorconfig' => base_path('.editorconfig'),
                __DIR__ . '/../stubs/.gitignore' => base_path('.gitignore'),
                __DIR__ . '/../stubs/package.json' => base_path('package.json'),
                __DIR__ . '/../stubs/tailwind.config.js' => base_path('tailwind.config.js'),
                __DIR__ . '/../stubs/webpack.mix.js' => base_path('webpack.mix.js'),
            ], 'fortifyui-views');

            $this->publishes([
                __DIR__ . '/../app/Providers' => base_path('app/Providers'),
            ], 'fortifyui-provider');

            $this->commands([
                FortifyUITailwindCommand::class,
            ]);
        }
    }
}
