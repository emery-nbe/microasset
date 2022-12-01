<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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
Route::get('contact', [IndexController::class, 'contact'])->name('contact');
Route::post('sendMessage', [IndexController::class, 'sendMessage'])->name('sendMessage');

Route::group(['prefix' => 'shop'], function () {
    Route::get('/', [ShopController::class,'index'])->name('shop');
    Route::get('mon-panier', [ShopController::class,'showPanier'])->name('panier');
    Route::get('payer-la-facture', [ShopController::class,'showPaiement'])->name('paiement');
    Route::get('shop-detail', [ShopController::class,'showShopDetail'])->name('shop-detail');

});

Route::group(['prefix' => 'auth'], function () {
    Route::get('login', [LoginController::class,'show'])->name('login');
    Route::post('login-post', [LoginController::class,'store'])->name('login-post');

    Route::get('register', [RegisterController::class,'show'])->name('register');
    Route::post('store', [RegisterController::class,'store'])->name('register-store');
});


