@extends('layouts.app')

@section('content')
{{-- @dd($genre->mangas); --}}

<div class="container my-5">
    <h1 class="text-center my-4">modifica i dati del genere</h1>
    <form action="{{ route('genre.update', $genre) }}" class="d-flex card p-4" method="POST">
        @csrf
        @method('PUT')

        <label for="genere" class="my-2 fs-4">genere</label>
        <input type="text" name="genere" id="genere" value="{{ $genre->genere }}">

        <label for="descrizione" class="my-2 fs-4">descrizione</label>
        <textarea name="descrizione" id="descrizione" rows="3" >{{ $genre->descrizione }}</textarea>

        {{-- manga --}}
        <div class="mt-3 d-flex row flex-wrap mb-3">
            <span class="w-100 fs-4 mb-3">manga:</span>
            @foreach ($mangas as $manga)
            <div class="col-12 col-md-6 col-lg-4 col-xxl-3">
                <input type="checkbox" class="ms-5" id="manga-{{ $manga->id }}" name="mangas[]" value="{{ $manga->id }}"" {{ $genre->mangas->contains($manga->id) ? 'checked' : '' }}></input>
                <label for="manga-{{ $manga->id }}">{{$manga->titolo }}</label>
            </div>
            @endforeach
        </div>

        <input type="submit" value="salva" class="btn btn-success mt-3 w-50 m-auto">
    </form>
</div>

@endsection
