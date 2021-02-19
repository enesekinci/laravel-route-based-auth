<?php

namespace ENESEKINCI\RouteAuth;

use Illuminate\Support\ServiceProvider;

class RouteAuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }

    public function register()
    {
        # code...
    }
}
