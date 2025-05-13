<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function index()
    {

        session(['brand' => 'AVIATO']);

      $products =  Product::all();

        return view('screens.main.index',get_defined_vars());
    }
    function about()
    {
        return view('screens.main.about');
    }
    function contact()
    {
        return view('screens.main.contact');
    }
    function faq()
    {
        return view('screens.main.faq');
    }
    public function pricing()
    {
        return view('screens.main.pricing');
    }
}
