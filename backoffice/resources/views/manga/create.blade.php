@extends('layouts.app')

@section('content')

<div class="container my-5">
    <h1 class="text-center my-4">inserisci i dati del nuovo manga</h1>
    <form action="{{ route('manga.store') }}" class="d-flex card p-4" method="POST">
        @csrf

        <label for="titolo" class="my-2">titolo</label>
        <input type="text" name="titolo" id="titolo">

        <label for="autore" class="my-2">autore</label>
        <input type="text" name="autore" id="autore">

        <label for="editore" class="my-2">editore</label>
        <input type="text" name="editore" id="editore">

        <label for="url_copertina" class="my-2">url_copertina</label>
        <input type="text" name="url_copertina" id="url_copertina">

        <label for="status" class="my-2">status</label>
        <input type="text" name="status" id="status">

        <label for="numero_volumi" class="my-2">numero_volumi</label>
        <input type="text" name="numero_volumi" id="numero_volumi">

        <label for="data_inizio" class="my-2">data_inizio</label>
        <input type="text" name="data_inizio" id="data_inizio">

        <label for="valutazione" class="my-2">valutazione</label>
        <input type="text" name="valutazione" id="valutazione">


        {{-- tags --}}
        {{-- <div class="mt-3">
                @foreach ($tags as $tag)
                    <input type="checkbox" class="ms-5" id="tag-{{ $tag->id }}" name="tags[]" value="{{ $tag->id }}"></input>
                    <label for="tag-{{ $tag->id }}">{{$tag->name }}</label>
                @endforeach
        </div> --}}

        <label for="descrizione" class="my-2">descrizione</label>
        <textarea name="descrizione" id="descrizione" rows="5"></textarea>

        <input type="submit" value="salva" class="btn btn-success mt-3 w-50 m-auto">
    </form>
</div>

@endsection
