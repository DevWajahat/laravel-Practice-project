<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
       function index() {
           return view('screens.dashboard.index');
       }
       function profileDetails() {
           return view('screens.dashboard.profile-details');
       }
       function dashboard() {
           return view('screens.dashboard.dashboard');
       }
       function orders() {
           return view('screens.dashboard.order');
       }
       function address() {
           return view('screens.dashboard.address');
       }
}
