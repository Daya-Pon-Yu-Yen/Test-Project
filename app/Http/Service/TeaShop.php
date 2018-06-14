<?php

namespace App\Http\Service;

use App\Http\Repository\TeaShopProductListRepository;

class TeaShop
{

    /**
     * @return array
     */
    public static function productList(){
            $list=[];
            $teaShop=TeaShopProductListRepository::getProductList();
            foreach ($teaShop as $row){
                $list['productName'][]=$row->produt_name;
                $list['price'][]=$row->price;
            }
            return $list;
        }
}
