<?php

namespace Tester\Test\Providers;

use Illuminate\Support\ServiceProvider;

class TestProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views','test');
    }
}