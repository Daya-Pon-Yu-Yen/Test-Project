<?php

namespace App\Http\Service;

use App\Http\Repository\FiftyProductListRepository;

class Fifty extends ProductListAbstract
{

    /**
     * @return array
     */
    public function productList(){
        $fifty=FiftyProductListRepository::getProductList();
        return $this->list($fifty);
        }
}
