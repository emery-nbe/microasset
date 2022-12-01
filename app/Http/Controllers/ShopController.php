<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function index(){
        return view('shop.index');
    }

    public function showPanier(){
        return view('shop.cart');
    }

    public function showPaiement(){
        return view('shop.checkout');
    }

    public function showShopDetail(){
        return view('shop.shop-detail');
    }
}
