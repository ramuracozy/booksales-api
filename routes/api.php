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
Route::get('/books', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store']);


// Routing untuk Genre
Route::get('/genres', [GenreController::class, 'index']);
Route::post('/genres', [GenreController::class, 'store']);

// Routing untuk Author
Route::get('/authors', [AuthorController::class, 'index']);
Route::post('/authors', [AuthorController::class, 'store']);    

?>