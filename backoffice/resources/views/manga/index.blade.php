@extends('layouts.app')

@section('content')

<div class="jumbotron p-5 mb-4 rounded-3">
    <div class="container py-5">
        <h2 class="fs-2 mb-5 text-center">benvenuto nella sezione index dei manga!</h2>
        <div class="card p-4">
            <table class="table table-bordered m-0">
                <tr>
                    <th>titolo</th>
                    <th>autore</th>
                    <th>editore</th>
                    <th>status</th>
                    <th>numero volumi</th>
                    <th>dettagli</th>
                </tr>

                    @foreach ($mangas as $manga)
                    <tr>
                        <td><strong>{{ $manga->titolo }}</strong></td>
                        <td>{{ $manga->autore }}</td>
                        <td>{{ $manga->editore }}</td>
                        <td>{{ $manga->status }}</td>
                        <td>{{ $manga->numero_volumi }}</td>
                        <td><a href="{{ route('manga.show', $manga->id) }}">visualizza dettagli</a></td>
                    </tr>
                    @endforeach
            </table>
        </div>

        {{-- @dd($mangas) --}}

    </div>
</div>

<div class="content">
    <div class="container">
        <p>footer?</p>
    </div>
</div>
@endsection
