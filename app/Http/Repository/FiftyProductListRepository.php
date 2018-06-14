<?php

namespace App\Http\Repository;

use Illuminate\Database\Eloquent\Model;

class FiftyProductListRepository extends Model
{
    protected $table = 'fifty_product_list';

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getProductList(){
        $list=FiftyProductListRepository::get();
        return $list;
    }
}
