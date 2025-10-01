<?php
use Illuminate\Support\Facades\Route;
use App\Models\Movie;

Route::get('/', function () {
   return view('Home');
});

Route::get('/about', function () {
    return view('About');
});

Route::get('/movie', function ()  {
    return view('Movie', [

    'movies' => Movie::all()
    ]);
});

Route::get('/movies/{id}', function ($id)  { 
        $movies = Movie::find($id);

        return view('movies', ['movies' => $movies]);       
});

Route::get('/register', function () {
    return view('Register');
});