<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;  // Fixed model name (correct singular and spelling)



Route::get('/', function () {
    return view('home');  // Lowercase view names by convention
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->simplePaginate(3);
    return view('jobs.index', [
        'jobs' => $jobs // Correct model name and capitalization
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id); // Use singular and findOrFail to handle missing records
    
    return view('jobs.show', ['job' => $job]); // Singular 'job', and singular variable
});

