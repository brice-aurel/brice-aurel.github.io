<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use TCG\Voyager\Facades\Voyager;

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
    return view('index');
})->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Route for the Categories
Route::resource('/category', CategoryController::class);

//Route for the products
Route::resource('/product', ProductController::class);

//Route for the Cart
Route::middleware(['auth'])->group(function () {
    Route::post('panier/add/{id}', [CartController::class, 'add'])->name('cart_add');
    Route::get('/panier', [CartController::class, 'index'])->name('cart_index');
    Route::delete('/panier/{rowid}', [CartController::class, 'destroy'])->name('cart.destroy');
});

//Route for the order
Route::middleware(['auth'])->group(function () {
    Route::post('/payement', 'App\Http\Controllers\OrderController@store')->name('order.store');
    Route::get('/merci', 'App\Http\Controllers\OrderController@thankyou')->name('order.thankyou');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
