<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function index()
    {


        session(['brand' => 'AVIATO']);

        $products =  Product::all();

        return view('screens.web.index', get_defined_vars());
    }
    function about()
    {
        return view('screens.web.about');
    }
    function contact()
    {
        return view('screens.web.contact');
    }
    function faq()
    {
        return view('screens.web.faq');
    }
    public function pricing()
    {
        return view('screens.web.pricing');
    }
    public function notification()
    {
        return view('screens.web.notification');
    }
}
