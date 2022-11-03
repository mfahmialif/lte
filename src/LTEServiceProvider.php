<?php

namespace Mfahmialif\Lte;

use Illuminate\Support\ServiceProvider;

class LTEServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/views' => resource_path('views'),
            __DIR__ . '/public' => public_path('/'),
        ]);
    }

    public function register()
    {
    }
}
