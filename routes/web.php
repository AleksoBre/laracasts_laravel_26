<?php

use App\Http\Controllers\JobListingController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::view('/contact', 'contact');

Route::resource('jobs', JobListingController::class);

//Auth
Route::get('/register', [RegisteredUserController::class, 'create']);









Route::get('/login', [RegisteredUserController::class, 'show']);