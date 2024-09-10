<?php

use App\Models\User;
use App\Livewire\Cart;
use App\Livewire\Home;
use App\Livewire\Signin;
use App\Livewire\Signup;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\authMiddleware;
use App\Http\Controllers\UserController;
use App\Http\Middleware\GuestMiddleware;
use App\Http\Middleware\verifyCodeMIddleware;
use App\Livewire\Verifycode;

Route::get('/', Home::class)->name('home');
Route::get('/location', function () {
    return redirect('https://maps.app.goo.gl/Z8e2sqhYnNEfMwhz8');
})->name('location');
Route::middleware([GuestMiddleware::class])->group(function () {
    Route::get('/signup', Signup::class)->name('signup');
    Route::get('/signin', Signin::class)->name('signin');
    Route::get('/signup/verifycode/{id}', Verifycode::class)->name('verifycode')->middleware([verifyCodeMIddleware::class]);
});

Route::middleware([authMiddleware::class])->group(function () {
    Route::get('/cart', Cart::class)->name('cart');
    Route::post('/get-product', Home::class)->name('get-product');
    Route::get('/signout', function () {
        Auth::logout();
        return redirect()->route('home');
    })->name('signout');
});
