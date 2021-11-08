<?php

namespace Nbll\RedLight;

use Illuminate\Support\ServiceProvider;

class RedLightServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'red-light');
    }
    public function register()
    {
    }
}
