<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            ['name' => 'Tere Liye', 'nationality' => 'Indonesia'],
            ['name' => 'J.K. Rowling', 'nationality' => 'United Kingdom'],
            ['name' => 'George R.R. Martin', 'nationality' => 'USA'],
            ['name' => 'Andrea Hirata', 'nationality' => 'Indonesia'],
            ['name' => 'Stephen King', 'nationality' => 'USA'],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
