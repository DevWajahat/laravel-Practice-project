<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('add', [ShopController::class, 'addProductPage'])->name('add.product');

Route::post('store', [ShopController::class, 'store'])->name('store.products');

Route::get('edit/{id}', [ShopController::class, 'edit'])->name('edit.products');

Route::get('notification', [MainController::class, 'notification'])->name('notification');

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

Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout');

Route::prefix('cart/')->name('cart.')->controller(cartController::class)->group(function () {
    Route::get('/', 'index')->middleware('auth')->name('index');
    Route::post('/store/{id}/', 'store')->name('store');
    Route::get('/destroy/{id}/', 'destroy')->name('destroy');
});

Route::get('confirmation', [CheckoutController::class, 'confirmation'])->name('confirmation');

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


Route::prefix('forgot-password')->name('password.')->controller(AuthController::class)->group(function () {
    Route::get('/', 'forgotPasswordView')->name('request');
    Route::post('/', 'forgotpasswordPost')->middleware('guest')->name('email');
});

Route::prefix('reset-password/')->name('password.')->controller(AuthController::class)->group(function () {
    Route::get('/view/{token}', 'resetpasswordView')->middleware('guest')->name('reset');
    Route::post('/', 'resetpassword')->middleware('guest')->name('update');
});

Route::get('/login', [AuthController::class, 'login_view'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('isAdmin')->controller(AdminController::class)->prefix('/admin')->group(function () {
    Route::get('/','index')->name('admin.index');
});

Route::get('purchaseconfirmation', function () {
    return view('screens.checkout.purchase-confirmation');
});
