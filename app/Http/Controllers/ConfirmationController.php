<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmationController extends Controller
{
       function index() {
           return view('screens.confirmation');
       }
}
