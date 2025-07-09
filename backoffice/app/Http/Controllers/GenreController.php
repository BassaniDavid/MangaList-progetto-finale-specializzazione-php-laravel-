<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // prendo tutti i dati dal db inerente i generi
        $genres = Genre::orderBy('genere', 'asc')->get();

        // dd($genres);



        return view("genre.index", compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newGenre = new Genre();

        $newGenre->genere = $data['genere'];
        $newGenre->descrizione = $data['descrizione'];


        $newGenre->save();

        return redirect()->route('genre.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //per i generi non mi interessa, tuttwe le info si vedono già dalla index
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(genre $genre)
    {
         return view('genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        $data = $request->all();

        $genre->genere = $data['genere'];
        $genre->descrizione = $data['descrizione'];


        $genre->update();

        return redirect()->route('genre.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
