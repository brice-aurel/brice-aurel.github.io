<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\Coupon;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    // add new product to cart
    public function add(Request $request)
    {

        $product = Product::findOrFail($request->id);

        Cart::add(array(
            'id' => $product->id, // inique row ID
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->qte,
            'attributes' => array('photo' => $product->image),
        ));

        return redirect()->route('product.index')->with('success', 'Le produit a ete bien ajoute');
    }

    public function index()
    {
        $coupon = Coupon::find(1);

        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => $coupon->name,
            'type' => $coupon->type,
            'target' => 'total', // this condition will be applied to cart's subtotal when getSubTotal() is called.
            'value' => $coupon->value,
        ));

        Cart::condition($condition);

        return view('Cart.indexCart', compact('condition'));
    }

    public function destroy($rowid)
    {
        Cart::remove($rowid);
        return back()->with('success', 'Le produit a ete bien supprime');
    }
}
