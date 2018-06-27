<?php

namespace App\Http\Service;

use App\Http\Repository\TeaShopProductListRepository;

class TeaShop extends ProductListAbstract
{

    /**
     * @return array
     */
    public function productList(){
        $teaShop=TeaShopProductListRepository::getProductList();
        return $this->list($teaShop);
     }
}
