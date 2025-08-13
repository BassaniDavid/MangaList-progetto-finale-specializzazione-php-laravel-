<?php

namespace Database\Seeders;

use App\Models\Manga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MangaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $mangalist = config("manga");



        foreach ($mangalist as $manga) {
            $newManga = new Manga();

            $newManga->titolo = $manga['titolo'];
            $newManga->autore = $manga['autore'];
            $newManga->descrizione = $manga['descrizione'];
            $newManga->url_copertina = $manga['url_copertina'];
            $newManga->editore = $manga['editore'];
            $newManga->status = $manga['status'];
            $newManga->numero_volumi = $manga['numero_volumi'];
            $newManga->data_inizio = $manga['data_inizio'];
            $newManga->valutazione = $manga['valutazione'];

            $newManga->save();
        }

    }
}
