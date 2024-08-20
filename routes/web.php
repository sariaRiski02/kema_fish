<?php

use App\Models\User;
use App\Livewire\Home;
use App\Livewire\Signup;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/', Home::class);
Route::get('/signup', Signup::class);
