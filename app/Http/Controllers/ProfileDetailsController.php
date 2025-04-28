<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileDetailsController extends Controller
{
       function index() {
           return view('screens.profile-details');
       }
}
