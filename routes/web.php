<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::resource('product', ProductController::class);

Route::resource('category', CategoryController::class);

Route::post('/panier/add/{id}', [CartController::class, 'add'])->name('cart_add');

Route::get('/panier', [CartController::class, 'index'])->name('cart_index');
Route::delete('/panier/{rowid}',[CartController::class, 'destroy'])->name('cart.destroy');
Route::get('/videPanier', function(){
    return back()->Cart::clear();
});

Route::post('payment', 'App\Http\Controllers\OrderController@store')->name('order.store');
Route::get('/merci', 'App\Http\Controllers\OrderController@thankyou')->name('order.thankyou');
