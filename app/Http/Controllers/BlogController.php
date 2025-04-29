<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
       function index() {
           return view('screens.blogs.blog-left-sidebar');
       }
          function blogArticles() {
              return view('screens.blogs.blog-single');
          }
}
