<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        return view('screens.dashboard.index');
    }
    function profileDetails()
    {

        $user = User::find(auth()->id());


        return view('screens.dashboard.profile-details', get_defined_vars());
    }
    function dashboard()
    {
        return view('screens.dashboard.dashboard');
    }

    function orders()
    {

        return view('screens.dashboard.order');
    }
    function orderDetails($id)
    {
        $order = Order::find($id);


        return view('screens.dashboard.order-details',get_defined_vars());
    }
    function address()
    {
        return view('screens.dashboard.address');
    }
}
