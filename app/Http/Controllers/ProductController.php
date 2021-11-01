<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.indexProducts', ['products' => Product::with('category')->orderBy('created_at', 'Desc')->paginate(10)]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.showProduct', compact('product'));
    }

    public function search()
    {
        $q = request()->input('q');

        $product = Product::where('name', 'like', "%$q%")
                    ->orWhere('description', 'like', "%$q%")
                    ->paginate(10);
        return view('products.search', compact('product'));
    }

}
