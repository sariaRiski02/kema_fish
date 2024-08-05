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
use App\Http\Controllers\ProductController;
