<?php


use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use Illuminate\Http\Request;

Route::get('/user',function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Routing untuk Book
Route::apiResource('books', BookController::class);

// Routing untuk Genre
Route::apiResource('genres', GenreController::class);


// Routing untuk Author
Route::apiResource('authors', AuthorController::class);

?>