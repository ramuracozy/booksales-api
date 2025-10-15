<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Action',
            'description' => 'genre yang menekankan pada aksi fisik, seperti perkelahian, kejar-kejaran, dan ledakan.',
        ]);

         Genre::create([
            'name' => 'Romance',
            'description' => 'genre yang berfokus pada hubungan cinta dan romansa antara karakter utama.',
        ]);

         Genre::create([
            'name' => 'Adventure',
            'description' => 'genre yang menampilkan petualangan dan eksplorasi, sering kali dengan latar belakang yang eksotis atau berbahaya.',
        ]);

            Genre::create([
                'name' => 'Comedy',
                'description' => 'genre yang bertujuan untuk menghibur dan membuat penonton tertawa melalui situasi lucu, dialog jenaka, dan karakter yang kocak.',
            ]);
    
            Genre::create([
                'name' => 'Drama',
                'description' => 'genre yang fokus pada pengembangan karakter dan hubungan emosional, sering kali menampilkan konflik serius dan situasi kehidupan nyata.',
            ]);
    
            Genre::create([
                'name' => 'Fantasy',
                'description' => 'genre yang menampilkan elemen magis, makhluk mitos, dan dunia imajinatif yang berbeda dari kenyataan.',
            ]);
    }
}
