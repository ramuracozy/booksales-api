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
            'name' => 'Novel',
            'description' => 'Genre yang berisi cerita fiksi panjang dengan berbagai tema kehidupan.',
        ]);
        Genre::create([
            'name' => 'Fantasi',
            'description' => 'Genre yang menampilkan elemen magis, dunia imajinatif, dan makhluk mitos.',
        ]);
        Genre::create([
            'name' => 'Romantis',
            'description' => 'Genre yang berfokus pada kisah cinta dan hubungan antar karakter.',
        ]);
        Genre::create([
            'name' => 'Motivasi',
            'description' => 'Genre yang memberikan inspirasi dan motivasi kepada pembaca.',
        ]);
        Genre::create([
            'name' => 'Fiksi Ilmiah',
            'description' => 'Genre yang menggabungkan unsur ilmiah dan filosofi dalam cerita fiksi.',
        ]);
    }
}
