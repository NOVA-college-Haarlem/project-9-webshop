<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CustomerServiceController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cart', function (Request $request) {
    $cart = session()->get('cart', []);
    return view('cart', compact('cart'));
});
Route::get('/coupons', [CouponController::class, 'index'])->name('coupons.index');
    Route::get('/coupons/create', [CouponController::class, 'create'])->name('coupons.create');
    Route::post('/coupons', [CouponController::class, 'store'])->name('coupons.store');
    Route::resource('coupons', CouponController::class);


    Route::get('customerservice/home', function (Request $request) {
        return view('customerservice.home');
    });


Route::get('/customerservice', [CustomerServiceController::class, 'home'])->name('customerservice.home');
    Route::get('/customerservice/faq', [CustomerServiceController::class, 'faq'])->name('customerservice.faq');
    Route::get('/customerservice/contact', [CustomerServiceController::class, 'contact'])->name('customerservice.contact');
    Route::post('/customerservice/contact', [CustomerServiceController::class, 'sendContact'])->name('customerservice.contact.send');
    


Route::get('/checkout', function (Request $request) {
    return view('checkout');
})->name('checkout');
Route::get('/checkout/index', [CheckoutController::class, 'checkout'])->name('checkout.index');
Route::get('/checkout/edit', [CheckoutController::class, 'edit'])->name('checkout.edit');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');