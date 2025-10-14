<?php

namespace App\Models;

class Author
{
    public static function getAll()
    {
        return [
            ['id' => 1, 'name' => 'Tere Liye', 'nationality' => 'Indonesia'],
            ['id' => 2, 'name' => 'J.K. Rowling', 'nationality' => 'United Kingdom'],
            ['id' => 3, 'name' => 'George R.R. Martin', 'nationality' => 'United States'],
            ['id' => 4, 'name' => 'Andrea Hirata', 'nationality' => 'Indonesia'],
            ['id' => 5, 'name' => 'Stephen King', 'nationality' => 'United States'],
        ];
    }
}
