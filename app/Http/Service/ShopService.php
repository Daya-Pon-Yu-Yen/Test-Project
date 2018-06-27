<?php

namespace App\Http\Service;

use Illuminate\Support\Facades\App;

class ShopService
{

    /**
     * @param string $name
     * @return array
     */
    public static function shop(string $name){
        $shop=app(ProductListInterFace::class,[$name]);
        return App::make($shop)->productList();
        }
}
