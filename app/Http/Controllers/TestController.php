<?php

namespace App\Http\Controllers;

use App\Http\Service\ShopService;

class TestController extends Controller
{
    private $name='fifty';
//    private $name='chinSin';
//    private $name='teaShop';
    /**
     * @return array
     */
    public function index()
    {
        return ShopService::shop($this->name);
    }
}
