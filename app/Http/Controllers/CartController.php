<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class CartController extends Controller
{
    function index()
    {

           $cart = Cart::where('user_id', auth()->id())->first();

        //    dd($cart->products);

           $cartProducts = $cart->products;


        return view('screens.cart.index', get_defined_vars());
    }

    public function store($id, Request $request)
{
    $product = Product::findOrFail($id);
    $cart = Cart::firstOrCreate(['user_id' => auth()->id()]);

    // Check krega ke product pehle se hi exist krta hai bhi ke nhi
    $existing = $cart->products()
        ->where('product_id', $id)
        ->wherePivot('color', $request->Color)
        ->wherePivot('size', $request->Size)
        ->first();

    if ($existing) {
        // Update quantity krdega product ki
        $cart->products()->updateExistingPivot($id, [
            'quantity' => $existing->pivot->quantity + $request->quantity,
        ]);
    } else {
        // wrna naya product add krdega
        $cart->products()->attach($id, [
            'quantity' => $request->quantity,
            'color' => $request->Color,
            'size' => $request->Size,
        ]);
    }

    return back();
}


    public function destroy($id)
    {
        $product = Product::find($id);

        $cart = Cart::where('user_id',auth()->id())->first();

        $cart->products()->detach($id);

        return back();
    }
}
