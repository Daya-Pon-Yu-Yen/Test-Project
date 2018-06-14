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
           'fifty'=>Fifty::productList(),
           'chinSin'=>ChinSin::productList(),
           'teaShop'=>TeaShop::productList()
       ];
       return $shop[$name];
   }
}
