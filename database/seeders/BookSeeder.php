<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Laskar Pelangi',
            'description' => 'Kisah inspiratif tentang perjuangan anak-anak di Belitung untuk meraih pendidikan.',
            'price' => 120000,
            'stock' => 50,
            'cover_foto' => 'laskar_pelangi.jpg',
            'genre_id' => 2,
            'author_id' => 2,
        ]);
        Book::create([
            'title' => 'Bumi',
            'description' => 'Novel fantasi petualangan remaja yang penuh misteri dan persahabatan.',
            'price' => 95000,
            'stock' => 40,
            'cover_foto' => 'bumi.jpg',
            'genre_id' => 3,
            'author_id' => 3,
        ]);
        Book::create([
            'title' => 'Dilan 1990',
            'description' => 'Kisah cinta remaja di Bandung antara Dilan dan Milea.',
            'price' => 85000,
            'stock' => 35,
            'cover_foto' => 'dilan_1990.jpg',
            'genre_id' => 4,
            'author_id' => 4,
        ]);
        Book::create([
            'title' => 'Negeri 5 Menara',
            'description' => 'Perjalanan hidup santri di pesantren yang penuh motivasi dan harapan.',
            'price' => 110000,
            'stock' => 25,
            'cover_foto' => 'negeri_5_menara.jpg',
            'genre_id' => 2,
            'author_id' => 5,
        ]);
        Book::create([
            'title' => 'Supernova: Ksatria, Puteri, dan Bintang Jatuh',
            'description' => 'Novel fiksi ilmiah dan filosofi yang menggabungkan kisah cinta dan pencarian makna hidup.',
            'price' => 130000,
            'stock' => 20,
            'cover_foto' => 'supernova.jpg',
            'genre_id' => 5,
            'author_id' => 6,
        ]);
    }
}
