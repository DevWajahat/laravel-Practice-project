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


        // Variant::

        //     Category::create([
        //         'name' => 'clothes'
        //     ]);

        // Attribute::create([
        //     'name' => 'quality'
        // ]);

        //   Product::create([
        //     'category_id' => '2',
        //     'name' => 'Resort Collar Shirt',
        //     'price' => '1990',
        //     'description' => "Unleash your inner tourist with our Resort Collar Shirt. Made with a basic design, this shirt is perfect for any sunny destination. Upgrade your vacation wardrobe and channel your playful side with this quirky and fun shirt. Don't miss out on this must-have piece for your next trip!"
        //   ]);


        // $product->variants()->attach(1)

        // Variant::create([
        //     'attribute_id' => 1,
        //     'name' => 'M'
        // ]);


        // $product = Product::find(1);
        // $attributes = Attribute::all();
        // // dd($attribute);

        // foreach($attributes as  $attribute) {
        //  $product->attributes()->attach($attribute->id);
        // }







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
