<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function index()
    {



       $carts = Cart::all();

        return view('screens.cart.index',compact('carts'));
    }

       function store(Request $request) {

           return view('screens.cart.add-product');
       }
}
