<?php

namespace App\Http\Factory;


use App\Http\Service\ChinSin;
use App\Http\Service\Fifty;
use App\Http\Service\TeaShop;

class ShopFactory
{

    /**
     * @param string $name
     * @return array
     */
   public static function shop(string $name){
       $shop=[
           'fifty'=>Fifty::class,
           'chinSin'=>ChinSin::class,
           'teaShop'=>TeaShop::class
       ];

       return $shop[$name];
   }
}
