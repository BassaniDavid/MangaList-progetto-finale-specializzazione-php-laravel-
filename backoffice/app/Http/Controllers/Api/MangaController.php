<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Manga;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    public function index() {
        // prendo i manga e i generi
        $mangas =Manga::with('genres')->get();

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
