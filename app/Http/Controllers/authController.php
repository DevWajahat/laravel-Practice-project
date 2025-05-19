<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\StoreRegisterRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register_view()
    {
        return view('screens.auth.signup');
    }

    public function register(StoreRegisterRequest $request)
    {
        $user = User::create($request->sanitized());
        Auth::login($user);

        if (Auth::check()) {

            return redirect()->route('home');
        }
        return back();
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('screens.auth.edit-details', get_defined_vars());
    }

    public function update($id, Request $request)
    {

        $user = User::find($id);

        // dd($request->phone_no);
        $user->update([
            'name' => $request->name,
            'phone_no' => $request->phone_no
        ]);

        return redirect()->route('dashboard.profileDetails');
    }

    public function login_view()
    {
        return view('screens.auth.login');
    }
    public function login(StoreLoginRequest $request)
    {
        $credentials = $request->sanitized();


        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',

        ])->onlyInput('email');
    }


    public function forgetpassword()
    {
        return view('screens.auth.forget-password');
    }

    public function auth(Request $request) {}

    public function logout()
    {

        Auth::logout();

        return back();
    }
}
