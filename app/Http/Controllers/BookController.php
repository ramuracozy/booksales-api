<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Author;

class BookController extends Controller
{
    public function showGenres()
    {
        $genres = Genre::getAll();
        return view('genres', compact('genres'));
    }

    public function showAuthors()
    {
        $authors = Author::getAll();
        return view('authors', compact('authors'));
    }
}
