<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

// membuat route baru
Route::get('/books', function () {
    return view('books');
});
Route::get('/genres', [BookController::class, 'showGenres']);
Route::get('/authors', [BookController::class, 'showAuthors']);