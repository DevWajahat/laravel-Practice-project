<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
       function index() {
           return view('screens.products.index');
       }

       function details() {
        return view('screens.products.details');
    }
}
