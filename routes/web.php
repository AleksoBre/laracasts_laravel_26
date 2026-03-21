<?php

use App\Models\JobListing;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

// Index
Route::get('/jobs', function () 
{
    return view('jobs.index', [
        'jobs' => JobListing::with('employer')->latest()->simplePaginate(10)
    ]);
});

// Create
Route::view('/jobs/create', 'jobs.create');

// Store
Route::post('/jobs', function() {

    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    JobListing::create([
        'employer_id' => 1,
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs');

});

// Edit
Route::get('/jobs/{job}/edit', function (JobListing $job) {
    return view('jobs.edit', ['job' => $job]);
});

// Update
Route::patch('/jobs/{job}/edit', function(JobListing $job) {
    
});

// Show
Route::get('/jobs/{job}', function (JobListing $job) 
{
    return view('jobs.show', ['job' => $job]);
});

Route::view('/contact', 'contact');