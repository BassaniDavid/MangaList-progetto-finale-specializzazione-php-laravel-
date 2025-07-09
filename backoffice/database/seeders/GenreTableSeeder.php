<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
                // Demografie (target di lettori)
        'kodomo',    // bambini :contentReference[oaicite:1]{index=1}
        'shōnen',   // ragazzi adolescenziali :contentReference[oaicite:2]{index=2}
        'shōjo',    // ragazze adolescenziali :contentReference[oaicite:3]{index=3}
        'seinen',   // uomini adulti :contentReference[oaicite:4]{index=4}
        'josei',    // donne adulte :contentReference[oaicite:5]{index=5}

        // Generi tematici principali
        'action',
        'adventure',
        'fantasy',
        'science_fiction',
        'horror',
        'mystery',
        'thriller',
        'slice_of_life',
        'romance',
        'comedy',
        'drama',
        'sports',
        'mecha',
        'isekai',
        'supernatural',
        'psychological',
        'historical',
        'yaoi',     // boys' love :contentReference[oaicite:6]{index=6}
        'yuri',     // girls' love :contentReference[oaicite:7]{index=7}
        'ecchi',
        'harem',
        'gender_bender',
        'cooking',  // cooking manga :contentReference[oaicite:8]{index=8}
        'crime',
        'mecha',
        ];



        foreach ($genres as $genre) {
            $newGenre = new Genre();

            $newGenre->genere = $genre;

            $newGenre->save();
        }
    }
}
