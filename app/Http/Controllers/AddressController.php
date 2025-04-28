<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
{
       function index() {
           return view('screens.address');
       }
}
