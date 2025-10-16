<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            [
                'name' => 'Andrea Hirata',
                'nationality' => 'Indonesia',
                'photo' => 'andrea_hirata.jpg',
                'bio' => 'Andrea Hirata adalah penulis novel terkenal asal Indonesia, salah satunya Laskar Pelangi.'
            ],
            [
                'name' => 'Tere Liye',
                'nationality' => 'Indonesia',
                'photo' => 'tere_liye.jpg',
                'bio' => 'Tere Liye adalah penulis produktif Indonesia yang banyak menulis novel bertema motivasi dan fantasi.'
            ],
            [
                'name' => 'Pidi Baiq',
                'nationality' => 'Indonesia',
                'photo' => 'pidi_baiq.jpg',
                'bio' => 'Pidi Baiq dikenal sebagai penulis novel Dilan dan juga seorang musisi.'
            ],
            [
                'name' => 'Ahmad Fuadi',
                'nationality' => 'Indonesia',
                'photo' => 'ahmad_fuadi.jpg',
                'bio' => 'Ahmad Fuadi adalah penulis novel Negeri 5 Menara yang menginspirasi banyak pembaca.'
            ],
            [
                'name' => 'Dee Lestari',
                'nationality' => 'Indonesia',
                'photo' => 'dee_lestari.jpg',
                'bio' => 'Dee Lestari adalah penulis dan musisi Indonesia, terkenal dengan seri novel Supernova.'
            ],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
