<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    function index() {
        return view('screens.checkout.index');
    }
       function confirmation() {
           return view('screens.checkout.confirmation');
       }
}
