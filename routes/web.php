<?php

use App\Http\Controllers\JobListingController;
use App\Models\JobListing;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

// Index
Route::get('/jobs', [JobListingController::class, 'index']);

// Create
Route::get('/jobs/{job}/create', [JobListingController::class, 'create']);

// Store
Route::post('/jobs', [JobListingController::class, 'store']);

// Edit
Route::get('/jobs/{job}/edit', JobListingController::class, 'edit');

// Update
Route::patch('/jobs/{job}', JobListingController::class, 'update');

// Destroy
Route::delete('/jobs/{job}', JobListingController::class, 'destroy');

// Show
Route::get('/jobs/{job}', [JobListingController::class, 'show']);

Route::view('/contact', 'contact');