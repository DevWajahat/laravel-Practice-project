<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index()
    {
        return view('screens.blogs.index');
    }
    function blogArticles()
    {
        return view('screens.blogs.blog-article');
    }
}
