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
    return view('jobs', [
        'jobs' => Job::all(), // Correct model name and capitalization
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id); // Use singular and findOrFail to handle missing records
    
    return view('job', ['job' => $job]); // Singular 'job', and singular variable
});

Route::get('/register', function () {
    return view('register');
});
