<?php

namespace App\Http\Repository;

use Illuminate\Database\Eloquent\Model;

class TeaShopProductListRepository extends Model
{
    protected $table = 'tea_shop_product_list';

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getProductList(){
        $list=TeaShopProductListRepository::all();
        return $list;
    }
}
