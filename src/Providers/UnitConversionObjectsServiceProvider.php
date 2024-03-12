<?php
namespace RhinoAfrica\UnitConversionObjects\Providers;

use Illuminate\Support\ServiceProvider;
use RhinoAfrica\UnitConversionObjects\Services\UnitConversionService;

/**
 * UnitConversionObjects Service Provider for Laravel Injection
 */
class UnitConversionObjectsServiceProvider
    extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(UnitConversionService::class, function ($app) {
            return new UnitConversionService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
