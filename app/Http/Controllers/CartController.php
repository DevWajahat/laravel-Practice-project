<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cartController extends Controller
{
    function index()
    {
        return view('screens.cart.index');
    }
}
