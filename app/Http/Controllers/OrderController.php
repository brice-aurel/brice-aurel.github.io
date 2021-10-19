<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function store()
    {
        $order = new Order();

        $order->amount = Cart::getTotal();
        $products = [];
        $i = 0;

        foreach (Cart::getContent() as $product) {
            $products['product_' . $i][] = $product->name;
            $products['product_' . $i][] = $product->price;
            $products['product_' . $i][] = $product->qte;
            $i++;
        }

        $order->products = serialize($products);
        $order->user_id = 2;
        $order->save();

        Cart::clear();
        Session::flash('success','Votre commande a ete traitee avec succes.');
        return redirect()->route('order.thankyou');

        // return response()->json(['success' => 'Payment Intent Succeeded']);
    }

    public function thankyou()
    {
        return Session::has('success') ? view('Order.index'):redirect()->route('product.index');
    }
}
