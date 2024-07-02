<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/signup', function () {
    return view('pages.signup');
})->name('signup');

Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');

Route::get('/settings', function () {
    return view('pages.setting');
})->name('settings');


Route::get('/product/code', function () {
    return view('pages.itemProduct');
});
