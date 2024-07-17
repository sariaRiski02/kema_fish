<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Livewire\SignupLivewire;
use App\Livewire\UserLivewire;
use GuzzleHttp\Psr7\Request;

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

Route::get('/signup', function () {
    return view('pages.signup');
})->name('signup');
Route::post('/signup', [UserController::class, 'signupPost']);

Route::get('/signup/verify', [UserController::class, 'verifyForm'])->name('verify');
Route::post('/signup/verify', [UserController::class, 'VerifyCode'])->name('signup.verify');
Route::get('/signup/verify/resend', [UserController::class, 'resendCode'])->name('signup.resend');


Route::get('/login', function () {
    return view('pages.login');
})->name('login');
Route::post('/login', [UserController::class, 'loginPost']);



// Route::get('/mail', function () {
//     return view('mail.mail');
// });
