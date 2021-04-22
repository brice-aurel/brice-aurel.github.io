<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // add new product at cart
    public function add(Request $request) {
        $product = Product::find($request->id);

        Cart::add(array(
            'id' => $product->id, // inique row ID
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->qte,
            'attributes' => array()
        ));
        return redirect()->route('cart_index');
    }

    public function index() {
        $cartCollection = Cart::getContent();
        dd($cartCollection);
    }
}
