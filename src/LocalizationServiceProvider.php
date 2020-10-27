<?php

namespace Squarebit\Localization;

use Illuminate\Support\ServiceProvider;

class LocalizationServiceProvider extends ServiceProvider
{
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->publishes([
            __DIR__.'/../resources/lang/pt.json' => resource_path('lang/pt.json'),
            __DIR__.'/../resources/lang/pt' => resource_path('lang/pt'),
        ], 'laravel-pt-Localization');
    }
}
