<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Attribute;
use App\Models\ProductAttribute;
use App\Models\ProductVariant;
use App\Models\Variant;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    function index()
    {
        $products = Product::all();

        return view('screens.products.index', get_defined_vars());
    }

    function details($id)
    {

        $product = Product::find($id);

        return view('screens.products.details', get_defined_vars());
    }

    function checkout()
    {
        return view('screens.products.checkout');
    }
    function confirmation()
    {
        return view('screens.products.confirmation');
    }
    function addProductPage()
    {


        return view('screens.products.add-product');
    }
    function store(Request $request)
    {

        
        // return redirect(route('home'));
        return back();
    }

    function edit($id)
    {

        return view('screens.products.update-product', get_defined_vars());
    }



    function updateProduct(Request $request)
    {


        return back();
    }
}
