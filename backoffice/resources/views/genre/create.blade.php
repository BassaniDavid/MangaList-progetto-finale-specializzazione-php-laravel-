@extends('layouts.app')

@section('content')

    <form action="{{ route('genre.store') }}" class="d-flex card p-4" method="POST">
        @csrf

        <label for="genere" class="my-2">genere</label>
        <input type="text" name="genere" id="genere">

        <label for="descrizione" class="my-2">descrizione</label>
        <textarea name="descrizione" id="descrizione" rows="5"></textarea>

        {{-- tags --}}
        {{-- <div class="mt-3">
                @foreach ($tags as $tag)
                    <input type="checkbox" class="ms-5" id="tag-{{ $tag->id }}" name="tags[]" value="{{ $tag->id }}"></input>
                    <label for="tag-{{ $tag->id }}">{{$tag->name }}</label>
                @endforeach
        </div> --}}

        <input type="submit" value="salva" class="btn btn-success mt-3 w-50 m-auto">
    </form>

@endsection
