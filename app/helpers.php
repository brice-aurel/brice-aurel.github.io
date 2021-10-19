<?php

use Illuminate\Support\Facades\Route;

if (! function_exists('route_active')) {
    function route_active ($route) {
        return Route::is($route) ? 'active' : '';
    }
}

if (! function_exists('getPrice')) {
    function getPrice($price) {

        return number_format($price, 2, '.', ' '). 'FCFA';
    }
}
