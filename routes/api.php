<?php


use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use Illuminate\Http\Request;

Route::get('/user',function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// membuat route baru
Route::get('/books', [BookController::class, 'index']);
Route::get('/genres', [GenreController::class, 'index']);
Route::get('/authors', [AuthorController::class, 'index']);

?>