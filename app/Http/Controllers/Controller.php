<?php

namespace App\Http\Controllers;
use App\Models\Job;
abstract class Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs.index', [
        'jobs' => $jobs // Correct model name and capitalization
    ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store()
    {
                request()->validate([
        'title' => ['required', 'min:5'],
        'salary'=> ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);
    return redirect('/jobs');
    }

    public function show(Job $job)
    {
            return view('jobs.show', ['job' => $job]);
    }

    public function edit(Job $job)
    {
         return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        request()->validate([
        'title' => ['required', 'min:5'],
        'salary'=> ['required']
    ]);
    
    //authorize (on hold)

    //upadate

    $job->update([
        'title' => request('title'),
        'salary'=> request('salary'),
    ]);

    //redirect to the job

    return redirect('/jobs/' . $job->id);
    }
    public function destroy(Job $job)
    {
         //delete the job
    $job->delete();

    //redirect

    return redirect('/jobs');

    }

}
