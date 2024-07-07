<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Livewire\SignupLivewire;
use App\Livewire\UserLivewire;

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

Route::get('/signup', [UserController::class, 'signupForm'])->name('signup');
Route::post('/signup', [UserController::class, 'signupPost']);
