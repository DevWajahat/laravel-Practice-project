<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\MainController as ControllersMainController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ShopController;
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
Route::get('cart', [cartController::class, 'index'])->name('cart');
Route::get('confirmation', [checkoutController::class, 'confirmation'])->name('confirmation');



Route::prefix('blogs')->name('blogs.')->controller(BlogController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/articles', 'articles')->name('articles');
});


Route::prefix('dashboard')->name('dashboard.')->controller(DashboardController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('orders', 'orders')->name('orders');
    Route::get('address','address')->name('address');
    Route::get('profile/details','profileDetails')->name('profileDetails');
});



Route::get('signup', [authController::class, 'signup'])->name('signup');

Route::get('signin', [authController::class, 'signin'])->name('signin');

Route::get('forgetPassword', [authController::class, 'forgetpassword'])->name('forgetpassword');

Route::get('purchaseconfirmation', function () {
    return view('screens.checkout.purchase-confirmation');
});
