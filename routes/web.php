<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/{id}', [ProductController::class, 'show'] )->name('product.show');

Route::get('panier', [CartController::class, 'add'])->name('cart_add');
Route::delete('/panier/add/{id}', [CartController::class, 'destroy'])->name('cart.destroy');

Route::post('/payement', 'App\Http\Controllers\OrderController@store')->name('order.store');
Route::get('/merci', 'App\Http\Controllers\OrderController@thankyou')->name('order.thankyou');

Route::group(['prefix' => 'admin'], function() {
    Voyager::routes();
});
