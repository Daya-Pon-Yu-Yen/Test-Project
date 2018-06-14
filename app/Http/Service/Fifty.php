<?php

namespace App\Http\Service;

use App\Http\Repository\FiftyProductListRepository;

class Fifty
{

    /**
     * @return array
     */
    public static function productList(){
            $list=[];
            $fifty=FiftyProductListRepository::getProductList();
            foreach ($fifty as $row){
                $list['productName'][]=$row->produt_name;
                $list['price'][]=$row->price;
            }
            return $list;
        }
}
