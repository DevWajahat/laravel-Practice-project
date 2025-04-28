<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsArticleController extends Controller
{
       function index() {
           return view('screens.blog-single');
       }
}
