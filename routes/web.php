<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('index');
})->name('index');


Route::resource('product', ProductController::class);
