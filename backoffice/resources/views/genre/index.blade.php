@extends('layouts.app')

@section('content')

<div class="jumbotron p-5 mb-4 rounded-3">
    <div class="container py-5">
        <h2 class="fs-2 mb-5 text-center">benvenuto nella sezione index dei generi!</h2>
                <a href="{{ route('genre.create') }}">aggiungi nuovo genere</a>
        <div class="card p-4">
            <table class="table table-bordered m-0">
                <tr>
                    <th>genere</th>
                    <th>descrizione</th>
                    <th></th>
                </tr>

                    @foreach ($genres as $genre)
                    <tr>
                        <td>{{ $genre->genere }}</td>
                        <td>{{ $genre->descrizione }}</td>
                        <td class="text-center">
                            <a class="btn btn-outline-warning p-0 px-2" href="{{ route('genre.edit', $genre) }}">modifica</a>
                        </td>
                    </tr>
                    @endforeach
            </table>
        </div>

        {{-- @dd($genres) --}}

    </div>
</div>

<div class="content">
    <div class="container">
        <p>footer?</p>
    </div>
</div>
@endsection
