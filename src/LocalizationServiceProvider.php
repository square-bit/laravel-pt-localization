<?php

namespace Squarebit\Laravelptlocalization;

use Illuminate\Support\ServiceProvider;

class LocalizationServiceProvider extends ServiceProvider
{

    /**
     * Register any package services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../resources/lang/pt.json' => base_path('lang/pt.json'),
            __DIR__.'/../resources/lang/pt' => base_path('lang/pt'),
        ], 'laravel-pt-localization');
    }
}
