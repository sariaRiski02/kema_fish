<?php

use App\Models\User;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;



Route::get('/', Counter::class);
