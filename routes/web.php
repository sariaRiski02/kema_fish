<?php

use App\Models\User;
use GuzzleHttp\Psr7\Request;
use App\Livewire\UserLivewire;
use App\Livewire\SignupLivewire;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\authMiddleware;
use App\Http\Middleware\UserMiddleware;
use App\Http\Controllers\UserController;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('pages.home');
})->name('home');



Route::get('/settings', function () {
    return view('pages.setting');
})->name('settings');


Route::get('/product/code', function () {
    return view('pages.itemProduct');
});





Route::middleware([authMiddleware::class])->group(function () {

    Route::get('/signup', function () {
        return view('pages.signup');
    })->name('signup');
    Route::post('/signup', [UserController::class, 'signupPost']);

    Route::get('/signin', function () {
        return view('pages.signin');
    })->name('signin');
    Route::post('/signin', [UserController::class, 'loginPost'])->name('login.post');
});




Route::get('/signup/verify', [UserController::class, 'verifyForm'])->name('verify');
Route::post('/signup/verify', [UserController::class, 'VerifyCode'])->name('signup.verify');
Route::get('/signup/verify/resend', [UserController::class, 'resendCode'])->name('signup.resend');


Route::middleware([UserMiddleware::class])->group(function () {
    Route::get('/cart', function () {
        return view('pages.cart');
    })->name('cart');
});

Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware([UserMiddleware::class]);


Route::get('/auth/google/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/google/callback', [UserController::class, 'googleCallback']);


// update

Route::post('/settings/update', [UserController::class, 'updateUser'])->name('settings.update')->middleware([UserMiddleware::class]);
