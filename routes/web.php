<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');

Route::get('/settings', function () {
    return view('pages.setting');
})->name('settings');


Route::get('/product/code', function () {
    return view('pages.itemProduct');
});


Route::get('/signup', [AuthController::class, 'signupForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup']);
