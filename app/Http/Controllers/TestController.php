<?php

namespace App\Http\Controllers;

use App\Http\Repository\ChinSinProductListRepository;
use App\Http\Repository\FiftyProductListRepository;
use App\Http\Repository\TeaShopProductListRepository;

class TestController extends Controller
{
    private $name='fifty';
//    private $name='chinSin';
//    private $name='teaShop';
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        $list=[];
        switch ($this->name){
            case 'fifty':
                $fifty=FiftyProductListRepository::getProductList();
                foreach ($fifty as $row){
                    $list['productName'][]=$row->produt_name;
                    $list['price']=$row->price;
                }
                return $list;
            case 'chinSin':
                $chinSin=ChinSinProductListRepository::getProductList();
                foreach ($chinSin as $row){
                    $list['productName'][]=$row->produt_name;
                    $list['price']=$row->price;
                }
                return $list;
            case 'teaShop':
                $teaShop=TeaShopProductListRepository::getProductList();
                foreach ($teaShop as $row){
                    $list['productName'][]=$row->produt_name;
                    $list['price']=$row->price;
                }
                return $list;
            default:
                return $list;
        }
    }
}
