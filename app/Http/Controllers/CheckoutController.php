<?php

namespace App\Http\Controllers;

use App\Events\OrderShipped;
use App\Http\Requests\OrderStoreRequest;
use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        // $carts = Cart::all();

        // $product = Product::all();

        // $delivery = 18;


        $cart = Cart::where('user_id', auth()->id())->first();

        $delivery = 16;

        $cartProducts = $cart->products;

        $subTotal = 0;
        foreach ($cart->products as $product) {
            $subTotal += $product->pivot->quantity * $product->price;
        }
        // dd($subTotal);

        $subTotal += $delivery;

        return view('screens.checkout.index', get_defined_vars());
    }

    public function confirmation()
    {
        return view('screens.checkout.confirmation');
    }

    public function store(OrderStoreRequest $request)
    {
        $user = auth()->user();
        $cart = Cart::where('user_id', $user->id)->first();
        $cartProducts = $cart->products;
        $subTotal = 0;
        foreach ($cart->products as $product) {
            $subTotal += $product->pivot->quantity * $product->price;
        }
        $delivery = 16;
        $subTotal += $delivery;

        $order = $user->orders()->create([
            'total_amount' => $subTotal,
            'full_name' => $request->full_name,
            'address' => $request->address,
            'zip_code' => $request->zip_code,
            'city' => $request->city,
            'country' => $request->country,
            'status' => 'pending',
        ]);
        event(new OrderShipped($order));

        foreach ($cartProducts as $product) {

            $order->products()->attach([
                $product->id => [
                    'quantity' => $product->pivot->quantity,
                    'color' =>  $product->pivot->color,
                    'size' => $product->pivot->size,
                    'price' => $product->price,
                    'total_price' => $product->pivot->quantity * $product->price,
                ]
            ]);


            $cart->products()->detach();
            $cart->delete();
        }



        return redirect()->route('confirmation');
    }
}
