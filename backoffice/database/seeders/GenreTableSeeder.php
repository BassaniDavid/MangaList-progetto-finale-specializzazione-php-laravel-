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
        // Demografie
            [
                'genere' => 'kodomo',
                'descrizione' => 'Manga per bambini, con storie semplici e contenuti educativi.'
            ],
            [
                'genere' => 'shōnen',
                'descrizione' => 'Rivolto a ragazzi adolescenti; azione, avventura, amicizia e crescita.'
            ],
            [
                'genere' => 'shōjo',
                'descrizione' => 'Rivolto a ragazze adolescenti; romanticismo, relazioni e drammi emozionali.'
            ],
            [
                'genere' => 'seinen',
                'descrizione' => 'Per uomini adulti; temi maturi, violenza, psicologia o politica.'
            ],
            [
                'genere' => 'josei',
                'descrizione' => 'Per donne adulte; relazioni realistiche, vita quotidiana e introspezione.'
            ],

            // Generi tematici
            [
                'genere' => 'action',
                'descrizione' => 'Combattimenti, conflitti intensi e adrenalina.'
            ],
            [
                'genere' => 'adventure',
                'descrizione' => 'Viaggi, esplorazioni e scoperte in mondi diversi.'
            ],
            [
                'genere' => 'fantasy',
                'descrizione' => 'Elementi magici o soprannaturali in mondi immaginari.'
            ],
            [
                'genere' => 'science_fiction',
                'descrizione' => 'Tecnologia avanzata, futuri distopici e spazio.'
            ],
            [
                'genere' => 'horror',
                'descrizione' => 'Paura, mostri, violenza o atmosfera inquietante.'
            ],
            [
                'genere' => 'mystery',
                'descrizione' => 'Indagini, misteri da risolvere e suspense.'
            ],
            [
                'genere' => 'thriller',
                'descrizione' => 'Tensione psicologica, pericoli e colpi di scena.'
            ],
            [
                'genere' => 'slice_of_life',
                'descrizione' => 'Scene di vita quotidiana e situazioni realistiche.'
            ],
            [
                'genere' => 'romance',
                'descrizione' => 'Relazioni sentimentali e sviluppo romantico tra personaggi.'
            ],
            [
                'genere' => 'comedy',
                'descrizione' => 'Umorismo, situazioni divertenti e leggerezza.'
            ],
            [
                'genere' => 'drama',
                'descrizione' => 'Conflitti emotivi, eventi tragici e crescita personale.'
            ],
            [
                'genere' => 'sports',
                'descrizione' => 'Sport come tema centrale, competizioni e lavoro di squadra.'
            ],
            [
                'genere' => 'mecha',
                'descrizione' => 'Robot giganti pilotati da umani, spesso in guerra.'
            ],
            [
                'genere' => 'isekai',
                'descrizione' => 'Personaggi trasportati in un altro mondo, spesso fantasy.'
            ],
            [
                'genere' => 'supernatural',
                'descrizione' => 'Fantasmi, poteri occulti o eventi inspiegabili.'
            ],
            [
                'genere' => 'psychological',
                'descrizione' => 'Conflitti mentali, manipolazione e introspezione.'
            ],
            [
                'genere' => 'historical',
                'descrizione' => 'Ambientato in epoche passate, con contesto storico.'
            ],
            [
                'genere' => 'yaoi',
                'descrizione' => 'Storie romantiche o erotiche tra uomini, spesso rivolte a un pubblico femminile.'
            ],
            [
                'genere' => 'yuri',
                'descrizione' => 'Storie romantiche o erotiche tra donne, rivolte sia a pubblico maschile che femminile.'
            ],
            [
                'genere' => 'ecchi',
                'descrizione' => 'Contenuti sexy ma non esplicitamente pornografici, con tono comico o leggero.'
            ],
            [
                'genere' => 'harem',
                'descrizione' => 'Un personaggio circondato da più potenziali partner romantici.'
            ],
            [
                'genere' => 'gender_bender',
                'descrizione' => 'Personaggi che cambiano genere o affrontano temi legati al genere.'
            ],
            [
                'genere' => 'cooking',
                'descrizione' => 'Cibo, cucina e competizioni culinarie al centro della trama.'
            ],
            [
                'genere' => 'crime',
                'descrizione' => 'Crimini, investigazioni e lotta alla criminalità.'
            ],
        ];



        foreach ($genres as $genre) {
            $newGenre = new Genre();

            $newGenre->genere = $genre['genere'];
            $newGenre->descrizione = $genre['descrizione'];

            $newGenre->save();
        }
    }
}
