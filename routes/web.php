<?php

use App\Models\JobListing;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::get('/jobs', function () 
{
    return view('jobs.index', [
        'jobs' => JobListing::with('employer')->simplePaginate(10)
    ]);
});

Route::view('/jobs/create', 'jobs.create');

Route::get('/jobs/{id}', function ($id) 
{
    return view('jobs.show', ['job' => JobListing::find($id)]);
});

Route::view('/contact', 'contact');