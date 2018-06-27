<?php

namespace App\Http\Service;

use App\Http\Repository\ChinSinProductListRepository;

class ChinSin extends ProductListAbstract
{
    /**
     * @return array
     */
    public function productList(){
            $chinSin=ChinSinProductListRepository::getProductList();
            return $this->list($chinSin);
        }
}
