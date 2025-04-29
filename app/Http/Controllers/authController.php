<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    function signup() {
        return view('screens.auth.signin');
    }
       function signin() {
           return view('screens.auth.login');
       }
          function forgetpassword() {
              return view('screens.auth.forget-password');
          }
}
