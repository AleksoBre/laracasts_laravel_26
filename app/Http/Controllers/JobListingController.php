<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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
            'employer_id' => 2,
            'title' => request('title'),
            'salary' => request('salary')
        ]);
        

        return redirect('/jobs');
    }
    public function show(JobListing $job)
    {
        return view('jobs.show', ['job' => $job]);
    }
    public function edit(JobListing $job)
    {
        Gate::authorize('edit-job', $job);

        return view('jobs.edit', ['job' => $job]);
    }
    public function update(JobListing $job)
    {
        //validation
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'min:3']
        ]);

        //authorize

        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
            ]);

        return redirect('/jobs/' . $job->id);
    }
    public function destroy(JobListing $job)
    {
        // authorize
        $job->delete();
        return redirect('/jobs');
    }
}
