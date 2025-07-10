<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Manga;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // prendo tutti i dati dal db inerente i manga
        $mangas = Manga::orderBy('titolo', 'asc')->get();

        // dd($mangas);



        return view("manga.index", compact('mangas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // prendo i generi
        $genres = Genre::all();
        return view('manga.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newManga = new Manga();

        $newManga->titolo = $data['titolo'];
        $newManga->autore = $data['autore'];
        $newManga->descrizione = $data['descrizione'];
        $newManga->url_copertina = $data['url_copertina'];
        $newManga->editore = $data['editore'];
        $newManga->status = $data['status'];
        $newManga->numero_volumi = $data['numero_volumi'];
        $newManga->data_inizio = $data['data_inizio'];
        $newManga->valutazione = $data['valutazione'];

        $newManga->save();

        $newManga->genres()->attach($data['genres']);

        return redirect()->route('manga.show', $newManga->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Manga $manga)
    {
        // dd($manga->genres);
        return view('manga.show', compact('manga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manga $manga)
    {
        // prendo i generi
        $genres = Genre::all();

        return view('manga.edit', compact('manga', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manga $manga)
    {
        $data = $request->all();

        $manga->titolo = $data['titolo'];
        $manga->autore = $data['autore'];
        $manga->descrizione = $data['descrizione'];
        $manga->url_copertina = $data['url_copertina'];
        $manga->editore = $data['editore'];
        $manga->status = $data['status'];
        $manga->numero_volumi = $data['numero_volumi'];
        $manga->data_inizio = $data['data_inizio'];
        $manga->valutazione = $data['valutazione'];

        $manga->update();

        if($request->has('genres')) {

            $manga->genres()->sync($data['genres']);

        }else{
            $manga->genres()->detach();
        }

        return redirect()->route('manga.show', $manga->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manga $manga)
    {
        $manga->delete();

        return redirect()->route('manga.index');
    }
}
