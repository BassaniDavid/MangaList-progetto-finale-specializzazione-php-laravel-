@extends('layouts.app')

@section('content')

<div class="container my-5">
    <h1 class="text-center my-4">modifica i dati del genere</h1>
    <form action="{{ route('genre.update', $genre) }}" class="d-flex card p-4" method="POST">
        @csrf
        @method('PUT')

        <label for="genere" class="my-2">genere</label>
        <input type="text" name="genere" id="genere" value="{{ $genre->genere }}">

        <label for="descrizione" class="my-2">descrizione</label>
        <textarea name="descrizione" id="descrizione" rows="5" >{{ $genre->descrizione }}</textarea>

        {{-- tags --}}
        {{-- <div class="mt-3">
                @foreach ($tags as $tag)
                    <input type="checkbox" class="ms-5" id="tag-{{ $tag->id }}" name="tags[]" value="{{ $tag->id }}"></input>
                    <label for="tag-{{ $tag->id }}">{{$tag->name }}</label>
                @endforeach
        </div> --}}

        <input type="submit" value="salva" class="btn btn-success mt-3 w-50 m-auto">
    </form>
</div>

@endsection
