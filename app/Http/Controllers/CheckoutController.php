<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        // $carts = Cart::all();

        // $product = Product::all();

        // $delivery = 18;


        $cart = Cart::where('user_id', auth()->id())->first();
        
        $delivery = 16;

        $cartProducts = $cart->products;

        $subTotal =0;
        foreach ($cart->products as $product) {
            $subTotal += $product->pivot->quantity * $product->price;
        }
            // dd($subTotal);

            $subTotal += $delivery;

        return view('screens.checkout.index', get_defined_vars());
    }

    public function confirmation()
    {
        return view('screens.checkout.confirmation');
    }
}
