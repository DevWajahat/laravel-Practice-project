<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogsArticleController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeftSidebarController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\ProfileDetailsController;
use App\Http\Controllers\ShopController;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('shop',[ShopController::class,'index'])->name('shop');


Route::get('contact', [ContactController::class, 'index'])->name('contact');


Route::get('about',[AboutController::class,'index'])->name('about');

Route::get('checkout',[CheckoutController::class,'index'])->name('checkout');

Route::get('cart', [CartController::class, 'index'])->name('cart');

Route::get('product/details',[ShopController::class,'details'])->name('singleProduct');



Route::get('blogs',[BlogController::class, 'index'])->name('blog');


Route::get('pricing',[PricingController::class, 'index'])->name('pricing');

Route::get('confirmation',[ConfirmationController::class, 'index'])->name('confirmation');

Route::get('faq',[FaqController::class,'index'])->name('faq');

Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');

Route::get('orders',[OrdersController::class, 'index'])->name('orders');

Route::get('address',[AddressController::class,'index'])->name('address');

Route::get('profile/details',[ProfileDetailsController::class,'index'])->name('profileDetails');

Route::get('blogs/article',[BlogsArticleController::class,'index'])->name('blogsArticle');
