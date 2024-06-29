<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');
})->name('home');

Route::get('/signup', function () {
    return view('signup.signup');
})->name('signup');

Route::get('/cart', function () {
    return view('cart.cart');
})->name('cart');
