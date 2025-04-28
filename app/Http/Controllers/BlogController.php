<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
       function index() {
           return view('screens.blog-left-sidebar');
       }
}
