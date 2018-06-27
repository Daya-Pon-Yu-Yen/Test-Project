<?php

namespace App\Http\Service;


use Illuminate\Database\Eloquent\Collection;

abstract class ProductListAbstract implements ProductListInterFace
{

    public abstract function productList();


    /**
     * @param Collection $shopList
     * @return array
     */
    public function list(Collection $shopList){
        $list=[];
        foreach ($shopList as $row){
            $list['productName'][]=$row->produt_name;
            $list['price'][]=$row->price;
        }
        return $list;
    }
}
