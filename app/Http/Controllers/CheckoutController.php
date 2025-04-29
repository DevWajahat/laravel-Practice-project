<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkoutController extends Controller
{
    function index() {
        return view('screens.checkout.index');
    }
       function confirmation() {
           return view('screens.checkout.confirmation');
       }
}
