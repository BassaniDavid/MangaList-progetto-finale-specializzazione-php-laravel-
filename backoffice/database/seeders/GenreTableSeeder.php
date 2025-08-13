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
        $genres = config("genre");



        foreach ($genres as $genre) {
            $newGenre = new Genre();

            $newGenre->genere = $genre['genere'];
            $newGenre->descrizione = $genre['descrizione'];

            $newGenre->save();
        }
    }
}
