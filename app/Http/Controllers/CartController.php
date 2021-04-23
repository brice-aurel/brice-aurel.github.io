<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // add new product to cart
    public function add(Request $request) {
       
        $product = Product::find($request->id);

        Cart::add(array(
            'id' => $product->id, // inique row ID
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->qte,
            'attributes' => array('photo' => $product->image)
        ));
        return redirect()->route('cart_index');
    }

    public function index() {
        $cartCollection = Cart::getContent();
        $total = Cart::getTotal();
        $tva = ($total * 20)/100;
        return view('Cart.indexCart', compact('cartCollection', 'total', 'tva'));
    }
}
