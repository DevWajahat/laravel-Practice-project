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

        return view('screens.cart.index', get_defined_vars());
    }

    function store($id, Request $request)
    {
        $product = Product::find($id);

        $attribute = Product::find($id);




        // $cart  = Cart::where('user_id',auth()->user()->id)->first();

        // $product->carts()->get([
        //     'color' => $request->color,
        //     'size' => $request->size,
        //     'user_id' => auth()->user()->id
        // ]);

        $cart_product = DB::table('cart_product')
            ->where('color', $request->color)
            ->where('size', $request->size)
            ->where('user_id', $request->auth()->user()->id);

        if ($cart_product) {
            // $product->carts()->attach($cart,[
            //     'quantity' => $request->quantity,
            //     'color' => $request->color,
            //     'size' => $request->size
            // ]);
        }


        return back();
    }

    public function destroy($id)
    {
        Cart::find($id)->delete();

        return back();
    }
}
