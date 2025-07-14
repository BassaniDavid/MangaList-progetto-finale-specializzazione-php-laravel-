<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Manga;
use Illuminate\Http\Request;

class GenreController extends Controller {
    public function index()
    {
        $generi = Genre::all();

        return response()->json([
            'success' => true,
            'data' => $generi,
        ]);
    }

}
