@extends('layouts.app')

@section('content')

<div class="jumbotron p-5 mb-4 rounded-3">
    <div class="container py-5">
        <h2 class="fs-2 mb-5 text-center">benvenuto nella sezione index dei manga!</h2>
        <a href="{{ route('manga.create') }}">aggiungi nuovo manga</a>
        <div class="card p-4">
            <table class="table table-bordered m-0">
                <tr>
                    <th class="bg-primary-subtle">titolo</th>
                    <th class="bg-primary-subtle">autore</th>
                    <th class="bg-primary-subtle">editore</th>
                    <th class="bg-primary-subtle">status</th>
                    <th class="bg-primary-subtle">numero volumi</th>
                    <th class="bg-primary-subtle">dettagli</th>
                    <th class="bg-primary-subtle"></th>
                </tr>

                    @foreach ($mangas as $manga)
                    <tr>
                        <td><strong>{{ $manga->titolo }}</strong></td>
                        <td>{{ $manga->autore }}</td>
                        <td>{{ $manga->editore }}</td>
                        <td>{{ $manga->status }}</td>
                        <td>{{ $manga->numero_volumi }}</td>
                        <td class="text-center">
                            <a href="{{ route('manga.show', $manga->id) }}" class="btn btn-outline-success p-0 px-2">visualizza dettagli</a>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-outline-warning p-0 px-2" href="{{ route('manga.edit', $manga) }}">modifica</a>
                        </td>
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
