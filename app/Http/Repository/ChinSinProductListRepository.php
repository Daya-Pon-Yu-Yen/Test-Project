<?php

namespace App\Http\Repository;

use Illuminate\Database\Eloquent\Model;

class ChinSinProductListRepository extends Model
{
    protected $table = 'chin_shin_product_list';

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getProductList(){
        $list=ChinSinProductListRepository::all();
        return $list;
    }
}
