<?php

namespace App\Providers;

use App\Http\Factory\ShopFactory;
use App\Http\Service\ProductListInterFace;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

class ShopServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductListInterFace::class, function (Container $app, array $parameters) {
            $instance = null;
            if (isset($parameters[0])) {
                try {
                    $instance = ShopFactory::shop($parameters[0]);
                } catch (\Throwable $e) {
                }
            }

            return $instance;
        });
    }
}
