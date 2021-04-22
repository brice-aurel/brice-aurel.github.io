<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // add new product at cart
    public function add() {

        Cart::add(array(
            'id' => 456, // inique row ID
            'name' => 'Sample Item',
            'price' => 67.99,
            'quantity' => 2,
            'attributes' => array()
        ));
        return redirect()->route('cart_index');
    }

    public function index() {
        $cartCollection = Cart::getContent();
        dd($cartCollection);
    }
}
