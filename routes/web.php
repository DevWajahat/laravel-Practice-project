<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\MainController as ControllersMainController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ShopController;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

Route::get('/', [mainController::class, 'index'])->name('home');

Route::get('add', [ShopController::class, 'addProductPage'])->name('add.product');

Route::post('store', [ShopController::class, 'store'])->name('store.products');

Route::get('edit/{id}', [ShopController::class, 'edit'])->name('edit.products');

Route::prefix('/')->name('main.')->controller(MainController::class)->group(function () {
    Route::get('about', 'about')->name('about');
    Route::get('contact', 'contact')->name('contact');
    Route::get('pricing', 'pricing')->name('pricing');
    Route::get('faq', 'faq')->name('faq');
});

Route::prefix('products/')->name('products.')->controller(ShopController::class)->group(function () {

    Route::get('/', 'index')->name('index');
    Route::get('/details/{id}', 'details')->name('details');
});

Route::get('checkout', [checkoutController::class, 'index'])->name('checkout');

Route::prefix('cart/')->name('cart.')->controller(cartController::class)->group(function () {
    Route::get('/', 'index')->middleware('auth')->name('index');
    Route::post('/store/{id}/', 'store')->name('store');
    Route::get('/destroy/{id}/', 'destroy')->name('destroy');
});

Route::get('confirmation', [checkoutController::class, 'confirmation'])->name('confirmation');

Route::prefix('blogs')->name('blogs.')->controller(BlogController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/articles', 'articles')->name('articles');
});

Route::prefix('dashboard')->name('dashboard.')->controller(DashboardController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('orders', 'orders')->middleware('auth')->name('orders');
    Route::get('address', 'address')->name('address');
    Route::get('/orders/details/{id}', 'orderDetails')->name('orders.details');
    Route::get('profile/details', 'profileDetails')->name('profileDetails');
});

Route::post('checkout/store', [CheckoutController::class, 'store'])->name('checkout.store');

Route::get('/register', [AuthController::class, 'register_view'])->middleware('guest')->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Route::get('/forgot-password', [AuthController::class, 'forgetpassword'])->middleware('guest')->name('password.request');
// Route::get('/forgot-password', [AuthController::class, 'forgotpassword'])->middleware('guest')->name('password.email');


Route::prefix('forgot-password')->name('password.')->controller(AuthController::class)->group(function () {
    Route::get('/', 'forgotPasswordView')->name('request');
    Route::post('/', 'forgotpasswordPost')->middleware('guest')->name('email');
});

Route::prefix('reset-password/')->name('password.')->controller(AuthController::class)->group(function () {
    Route::get('/view/{token}', 'resetpasswordView')->middleware('guest')->name('reset');
    Route::post('/','resetpassword')->middleware('guest')->name('update');
});

Route::get('/login', [AuthController::class, 'login_view'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('purchaseconfirmation', function () {
    return view('screens.checkout.purchase-confirmation');
});
