<?php

namespace Novay\Key\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $moduleNamespace = 'Novay\\Key\\Http\\Controllers';

    public function boot() {
        parent::boot();
    }

    public function map() {
        $this->mapWebRoutes();
    }

    protected function mapWebRoutes() {
        Route::middleware(['web'])
            ->namespace($this->moduleNamespace)
            ->group(__DIR__.'/../../routes/web.php');
    }
}
