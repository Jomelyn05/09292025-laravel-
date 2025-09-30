<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/about', function () {
    return view('About');
});

Route::get('/movie', function () {
    return view('Movie', [

    'movies' => [
            [
                'id' => 1,
                'title' => 'The Witch',
                'about' =>'a 2015 folk horror film by Robert Eggers set in 1630s New England, where a devout Puritan family is exiled from their community and settles on the edge of a foreboding forest.'
            ],
            [
                'id'=> 2,
                'title' => 'The Conjuring',
                'about'=> 'a supernatural horror film about paranormal investigators Ed and Lorraine Warren, who are called to help a family in 1971 Rhode Island whose farmhouse is being terrorized by a powerful demonic entity.'
            ],
            [
                'id'=> 3,
                'title' => 'Titanic',
                'about'=> 'a romantic disaster film directed by James Cameron, starring Kate Winslet and Leonardo DiCaprio as a young aristocratic woman and a poor artist who fall in love aboard the doomed maiden voyage of the RMS Titanic..'
            ],
        ]
    ]);
});

Route::get('/movies/{id}', function ($id) { 
    
    $movies = [
            [
                'id' => 1,
                'title' => 'The Witch',
                'about' =>'a 2015 folk horror film by Robert Eggers set in 1630s New England, where a devout Puritan family is exiled from their community and settles on the edge of a foreboding forest.'
            ],
            [
                'id'=> 2,
                'title' => 'The Conjuring',
                'about'=> 'a supernatural horror film about paranormal investigators Ed and Lorraine Warren, who are called to help a family in 1971 Rhode Island whose farmhouse is being terrorized by a powerful demonic entity.'
            ],
        ];

        $movies = Arr::first($movies, fn($movie) => $movie['id'] == $id);

        return view('movies', ['movies' => $movies]);

        
});

Route::get('/register', function () {
    return view('Register');
});