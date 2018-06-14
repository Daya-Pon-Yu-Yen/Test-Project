<?php

namespace App\Http\Controllers;


use App\Http\Service\ChinSin;
use App\Http\Service\Fifty;
use App\Http\Service\TeaShop;

class TestController extends Controller
{
    private $name='fifty';
//    private $name='chinSin';
//    private $name='teaShop';
    /**
     * @return []
     */
    public function index()
    {
        switch ($this->name){
            case 'fifty':
                return Fifty::productList();
            case 'chinSin':
                return ChinSin::productList();
            case 'teaShop':
                return TeaShop::productList();
            default:
                return [];
        }
    }
}
