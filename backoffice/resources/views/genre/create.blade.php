@extends('layouts.app')

@section('content')

<div class="container my-5">
    <form action="{{ route('genre.store') }}" class="card p-4" method="POST">
        @csrf

        <label for="genere" class="my-2 fs-4">genere</label>
        <input type="text" name="genere" id="genere">

        <label for="descrizione" class="my-2 fs-4">descrizione</label>
        <textarea name="descrizione" id="descrizione" rows="3"></textarea>

        {{-- manga --}}
        <div class="mt-3 d-flex row flex-wrap mb-3">
            <span class="w-100 fs-4 mb-3">manga:</span>
                @foreach ($mangas as $manga)
                <div class="col-12 col-md-6 col-lg-4 col-xxl-3">
                    <input type="checkbox" class="ms-5" id="manga-{{ $manga->id }}" name="mangas[]" value="{{ $manga->id }}"></input>
                    <label for="manga-{{ $manga->id }}">{{$manga->titolo }}</label>
                </div>
                @endforeach
        </div>

        <input type="submit" value="salva" class="btn btn-success mt-3 w-50 m-auto">
    </form>

</div>


@endsection
