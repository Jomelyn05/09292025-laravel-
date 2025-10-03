<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;  // Fixed model name (correct singular and spelling)



Route::get('/', function () {
    return view('home');  // Lowercase view names by convention
});

Route::get('/contact', function () {
    return view('contact');
});
//index
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs.index', [
        'jobs' => $jobs // Correct model name and capitalization
    ]);
});
//create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});
//show
Route::get('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id); // Use singular and findOrFail to handle missing records
    
    return view('jobs.show', ['job' => $job]); // Singular 'job', and singular variable
});
//store
Route::post('/jobs', function () {
    (request())->validate([
        'title' => ['required', 'min:5'],
        'salary'=> ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);
    return redirect('/jobs');
});
//edit

Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::findOrFail($id); // Use singular and findOrFail to handle missing records
    
    return view('jobs.edit', ['job' => $job]); // Singular 'job', and singular variable
});

//update
Route::patch('/jobs/{id}', function ($id) {
   //validate 
   (request())->validate([
        'title' => ['required', 'min:5'],
        'salary'=> ['required']
    ]);
    
    //authorize (on hold)

    //upadate

    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary'=> request('salary'),
    ]);
});

//destroy
//update
Route::delete('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id); // Use singular and findOrFail to handle missing records
    
    return view('jobs.show', ['job' => $job]); // Singular 'job', and singular variable
});
