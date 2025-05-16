<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function index()
    {

        $cart = Cart::find(1);


        dd($cart->user);

        return view('screens.cart.index', get_defined_vars());
    }

    function store($id,Request $request)
    {

        $product = Product::find($id);

            // dd($product->carts());

            // dd($product->carts());
            $product->carts()->create([

            'quantity' => $request->quantity
        ]);

        return back();
    }

    public function destroy($id)
    {
         Cart::find($id)->delete();

        return back();
    }
}
