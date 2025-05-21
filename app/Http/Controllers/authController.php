<?php

namespace App\Http\Controllers;

use App\Events\PasswordReset as EventsPasswordReset;
use Illuminate\Support\Str;
use App\Events\UserRegistered;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\StoreRegisterRequest;
use App\Http\Requests\StoreUserRequest;
use App\Mail\PasswordReset;
use App\Mail\UserRegistrationMailSend;
use App\Models\Cart;
use App\Models\PasswordResetToken;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\PasswordResetLinkSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    public function register_view()
    {
        return view('screens.auth.signup');
    }

    public function register(StoreRegisterRequest $request)
    {
        $user = User::create($request->sanitized());
        event(new UserRegistered($user));
        Auth::login($user);
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


    public function auth(Request $request) {}

    public function logout()
    {

        Auth::logout();

        return back();
    }



    public function forgotPasswordView()
    {
        return view('screens.auth.forget-password');
    }

    public function forgotpasswordPost(Request $request)
    {

        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        $passwordInstance =   PasswordResetToken::updateOrCreate(
            ['email' => $request->email],
            [
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]
        );

        // $passwordInstance = PasswordResetToken::updateOrCreate([
        //     ['email' => $request->email],
        //     ['token' => $token]
        // ]);

        //  dd($passwordInstance) ;



        event(new EventsPasswordReset($passwordInstance));

        //
        // Mail::to();

        return back()->with('message', 'We have e-mailed your Password reset link!');
    }

    public function resetpasswordView(Request $request, $token)
    {
        $instance = PasswordResetToken::where('token', $token)->first();

        if (!$instance) {
            return abort('404');
        }

        return view('screens.auth.reset-password', get_defined_vars());
    }

    public function resetpassword(Request $request)
    {

        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'token' => 'required'
        ]);


        $updatePassword = PasswordResetToken::where('email', $request->email)->where('token', $request->token)->first();


        if (!$updatePassword) {
            return back()->withInput();
        }

        User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);

        PasswordResetToken::find($request->email)->delete();

        return redirect()->route('login')->with('message', 'Your password has been changed');
    }
}
