<?php

namespace App\Http\Service;

use App\Http\Repository\ChinSinProductListRepository;

class ChinSin
{
    /**
     * @return array
     */
    public static function productList(){
            $list=[];
            $chinSin=ChinSinProductListRepository::getProductList();
            foreach ($chinSin as $row){
                $list['productName'][]=$row->produt_name;
                $list['price'][]=$row->price;
            }
            return $list;
        }
}
