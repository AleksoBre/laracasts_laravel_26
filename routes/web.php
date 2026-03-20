<?php

use App\Models\JobListing;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::get('/jobs', function () 
{
    return view('jobs.index', [
        'jobs' => JobListing::with('employer')->latest()->simplePaginate(10)
    ]);
});

Route::view('/jobs/create', 'jobs.create');

Route::post('/jobs', function() {
    //validation
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

Route::get('/jobs/{id}', function ($id) 
{
    return view('jobs.show', ['job' => JobListing::find($id)]);
});

Route::view('/contact', 'contact');