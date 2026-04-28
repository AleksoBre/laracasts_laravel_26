<?php

use App\Http\Controllers\JobListingController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Models\JobListing;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::controller(JobListingController::class)->group(function() {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create');
    Route::post('/jobs', 'store')->middleware('auth');
    Route::get('/jobs/{job}', 'show');
    Route::get('/jobs/{job}/edit', 'edit')->middleware('auth')->can('edit', 'job');
    Route::post('/jobs/{job}', 'update')->middleware('auth');
    Route::delete('/jobs/{job}', 'destroy')->middleware('auth');
});



//Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

//auth
//show buttons based on auth
//add auth middleware
