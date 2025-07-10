@extends('layouts.app')

@section('content')
{{-- @dd($genres) --}}

<div class="container my-5">
    <h1 class="text-center my-4">inserisci i dati del nuovo manga</h1>
    <form action="{{ route('manga.store') }}" class="card p-4" method="POST">
        @csrf

        <label for="titolo" class="my-2 fs-4">titolo</label>
        <input type="text" name="titolo" id="titolo">

        <label for="autore" class="my-2 fs-4">autore</label>
        <input type="text" name="autore" id="autore">

        <label for="editore" class="my-2 fs-4">editore</label>
        <input type="text" name="editore" id="editore">

        <label for="url_copertina" class="my-2 fs-4">url_copertina</label>
        <input type="text" name="url_copertina" id="url_copertina">

        <label for="status" class="my-2 fs-4">status</label>
        <input type="text" name="status" id="status">

        <label for="numero_volumi" class="my-2 fs-4">numero_volumi</label>
        <input type="text" name="numero_volumi" id="numero_volumi">

        <label for="data_inizio" class="my-2 fs-4">data_inizio</label>
        <input type="text" name="data_inizio" id="data_inizio">

        <label for="valutazione" class="my-2 fs-4">valutazione</label>
        <input type="number" name="valutazione" id="valutazione" min="1" max="10">


        {{-- generi --}}
        <div class="mt-3 d-flex row flex-wrap mb-3">
            <span class="w-100 fs-4 mb-3">generi:</span>
                @foreach ($genres as $genre)
                <div  class="col-6 col-md-4 col-lg-3 col-xxl-2">
                    <input type="checkbox" id="genre-{{ $genre->id }}" name="genres[]" value="{{ $genre->id }}"></input>
                    <label for="genre-{{ $genre->id }}">{{$genre->genere }}</label>
                </div>
                @endforeach
        </div>

        <label for="descrizione" class="my-2 fs-4">descrizione</label>
        <textarea name="descrizione" id="descrizione" rows="5"></textarea>

        <input type="submit" value="salva" class="btn btn-success mt-3 w-50 m-auto">
    </form>
</div>

@endsection
