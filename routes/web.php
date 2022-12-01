<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ShopController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');

Route::group(['prefix' => 'shop'], function () {
    Route::get('/', [ShopController::class,'index'])->name('shop');
    Route::get('mon-panier', [ShopController::class,'showPanier'])->name('panier');
    Route::get('payer-la-facture', [ShopController::class,'showPaiement'])->name('paiement');
    Route::get('shop-detail', [ShopController::class,'showShopDetail'])->name('shop-detail');

});

