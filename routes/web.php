<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;


Route::get('/', [mainController::class, 'index'])->name('home');

Route::get('shop',[ShopController::class,'index'])->name('shop');

Route::get('contact', [mainController::class, 'contact'])->name('contact');

Route::get('about',[mainController::class,'about'])->name('about');

Route::get('checkout',[checkoutController::class,'index'])->name('checkout');

Route::get('cart', [cartController::class, 'index'])->name('cart');

Route::get('product/details',[ShopController::class,'details'])->name('singleProduct')->middleware('prod-check');

Route::get('blogs',[BlogController::class, 'index'])->name('blog');

Route::get('pricing',[PricingController::class, 'index'])->name('pricing');

Route::get('confirmation',[checkoutController::class, 'confirmation'])->name('confirmation');

Route::get('faq',[mainController::class,'faq'])->name('faq');

Route::get('dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('orders',[DashboardController::class, 'orders'])->name('orders');

Route::get('address',[DashboardController::class,'address'])->name('address');

Route::get('profile/details',[DashboardController::class,'profileDetails'])->name('profileDetails');

Route::get('blogs/article',[BlogController::class,'blogArticles'])->name('blogsArticle');

Route::get('signup',[authController::class,'signup'])->name('signup');

Route::get('signin',[authController::class,'signin'])->name('signin');

Route::get('forgetPassword',[authController::class,'forgetpassword'])->name('forgetpassword');

Route::get('purchaseconfirmation', function () {
    return view('screens.checkout.purchase-confirmation');
});
