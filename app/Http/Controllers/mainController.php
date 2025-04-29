<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
       function index() {
           return view('screens.main.index');
       }
       function about() {
           return view('screens.main.about');
       }
       function contact() {
           return view('screens.main.contact');
       }
       function faq() {
           return view('screens.main.faq');
       }


}
