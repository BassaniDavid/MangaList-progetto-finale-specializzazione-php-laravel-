@extends('layouts.app')

@section('content')

<div class="jumbotron p-5 mb-4 rounded-3">
    <div class="container py-5">
        <h2 class="fs-2 mb-5 text-center">benvenuto nella sezione show dei manga!</h2>
        <div class="card p-4">
            <img src="{{$manga->url_copertina}}" alt="immagine copertina">
            <h2 class="mb-4">
                {{$manga->titolo}}
            </h2>
            <h5 class="mb-3">
                Autore: {{$manga->autore}}
            </h5>
            <p>Editore: {{$manga->editore}}</p>
            <p>{{$manga->status}}</p>
            <p>{{$manga->numero_volumi}}</p>
            <p>{{$manga->data_inizio}}</p>
            <p>{{$manga->valutazione}}</p>
            <p>{{$manga->descrizione}}</p>
            <a class="btn btn-outline-warning p-0 px-2 mb-3" href="{{ route('manga.edit', $manga) }}">modifica</a>
            <a href="{{ route('manga.index') }}" class="btn btn-secondary">Torna alla lista completa</a>

        </div>
    </div>
</div>

<div class="content">
    <div class="container">
        <p>footer?</p>
    </div>
</div>
@endsection
