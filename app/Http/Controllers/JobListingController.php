<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;

class JobListingController extends Controller
{
    public function index()
    {
        return view('jobs.index', [
        'jobs' => JobListing::with('employer')->latest()->simplePaginate(10)
        ]);
    }
    public function create()
    {
        return view('jobs.create');
    }
    public function store()
    {
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
    }
    public function show(JobListing $job)
    {
        return view('jobs.show', ['job' => $job]);
    }
    public function edit()
    {

    }
    public function update()
    {

    }
    public function destroy()
    {

    }
}
