<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil semua author dulu
        $authors = Author::all();

        // Data dummy buku
        $books = [
            ['title' => 'Bumi', 'author_id' => $authors[0]->id, 'genre' => 'Fantasy', 'year' => 2013],
            ['title' => 'Harry Potter and the Philosopher\'s Stone', 'author_id' => $authors[1]->id, 'genre' => 'Fantasy', 'year' => 1997],
            ['title' => 'A Game of Thrones', 'author_id' => $authors[2]->id, 'genre' => 'Fantasy', 'year' => 1996],
            ['title' => 'Laskar Pelangi', 'author_id' => $authors[3]->id, 'genre' => 'Drama', 'year' => 2005],
            ['title' => 'The Shining', 'author_id' => $authors[4]->id, 'genre' => 'Horror', 'year' => 1977],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
