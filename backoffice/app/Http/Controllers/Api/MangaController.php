<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Manga;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    // public function index() {
    //     // prendo i manga e i generi
    //     $mangas =Manga::with('genres')->get();

    public function index(Request $request) {
        // prendo i manga e i generi con possibilità di filtro e ordinamento
        $query = Manga::with('genres');

        if ($request->has('titolo')) {
            $query->where('titolo', 'like', '%' . $request->input('titolo') . '%');
        }

        if ($request->has('autore')) {
            $query->where('autore', 'like', '%' . $request->input('autore') . '%');
        }

        if ($request->has('valutazione_min')) {
            $query->where('valutazione', '>=', $request->input('valutazione_min'));
        }

        if ($request->has('genere_id')) {
            $query->whereHas('genres', function ($q) use ($request) {
            $q->whereIn('genres.id', (array) $request->input('genere_id'));
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        $mangas = $query->get();

        return response()->json(
            [
                'success' => true,
                'data' => $mangas,
            ]
            );
    }

    public function show(Manga $manga) {

        $manga->load('genres');

        return response()->json(
            [
                'success' => true,
                'data' => $manga,
            ]
            );
    }
}
