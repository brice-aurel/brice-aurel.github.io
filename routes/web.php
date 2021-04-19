<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


Route::get('/', function () {
    return view('index');
})->name('index');


Route::resource('product', ProductController::class);

Route::resource('category', CategoryController::class);
