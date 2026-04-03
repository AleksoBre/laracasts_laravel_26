<?php

use App\Http\Controllers\JobListingController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Models\JobListing;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::view('/contact', 'contact');

// Route::resource('jobs', JobListingController::class)->only('edit', 'update', 'destroy')->middleware('auth');
// Route::resource('jobs', JobListingController::class)->except('edit', 'update', 'destroy');

//index, create, store, show, edit, update, destroy
Route::get('/jobs', [JobListingController::class, 'index']);
Route::get('/jobs/create', [JobListingController::class, 'create']);
Route::post('/jobs', [JobListingController::class, 'store']);
Route::get('/jobs/{job}', [JobListingController::class, 'show']);
Route::get('/jobs', [JobListingController::class, 'index']);
Route::get('/jobs', [JobListingController::class, 'index']);
Route::get('/jobs', [JobListingController::class, 'index']);



//Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);