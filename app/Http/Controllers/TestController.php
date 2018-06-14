<?php

namespace App\Http\Controllers;


use App\Http\ChinSin;
use App\Http\Fifty;
use App\Http\TeaShop;

class TestController extends Controller
{
    private $name='fifty';

    public function index()
    {
        switch ($this->name){
            case 'fifty':
                $fifty=new Fifty();
                return $fifty->blackTea();
            case 'chinSin':
                $chinSin=new ChinSin();
                return $chinSin->blackTea();
            case 'teaShop':
                $teaShop=new TeaShop();
                return $teaShop->blackTea();
            default:
                return 0;
        }
    }
}
