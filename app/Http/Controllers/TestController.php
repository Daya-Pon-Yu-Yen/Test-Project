<?php

namespace App\Http\Controllers;


use App\Http\Factory\ShopFactory;

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
        return ShopFactory::shop($this->name);
    }
}
