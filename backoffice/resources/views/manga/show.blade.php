@extends('layouts.app')

@section('content')

<div class="jumbotron p-5 rounded-3">
    <div class="container py-5">
        <h2 class="fs-2 mb-5 text-center">dettagli manga</h2>
        <div class="card">
            <div class="card-body p-3">
                <h5 class="">
                    {{$manga->titolo}}
                </h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Autore: {{$manga->autore}}</li>
                <li class="list-group-item">Editore: {{$manga->editore}}</li>
                <li class="list-group-item">stato: {{$manga->status}}</li>
                <li class="list-group-item">numero volumi: {{$manga->numero_volumi}}</li>
                <li class="list-group-item">inizio pubblicazione: {{$manga->data_inizio}}</li>
                <li class="list-group-item">valutazione: {{$manga->valutazione}}</li>
                <li class="list-group-item">link dell'immagine: <a href="{{$manga->url_copertina}}" target="_blank">{{$manga->url_copertina}}</a></li>
                <li class="list-group-item">descrizione: <br> {{$manga->descrizione}}</li>
            </ul>
            <div class="card-body p-3">
                generi:
                <ul class="d-flex row">
                    @forelse ($manga->genres as $genre)
                        <li class="col-12 col-sm-6 col-md-4 col-lg-2">{{$genre->genere}}</li>
                    @empty
                        nessun genere assegnato
                    @endforelse
                </ul>
            </div>
            <hr>
            <div class="card-body row justify-content-around pt-3 w-100">
                <a class="btn btn-outline-warning px-3 col-12 col-md-3 mb-4 " href="{{ route('manga.edit', $manga) }}">modifica</a>
                <button type="button" class="btn btn-outline-danger px-3 col-12 col-md-3 mb-4 " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    elimina
                </button>
                <a href="{{ route('manga.index') }}" class="btn btn-outline-secondary px-3 col-12 col-md-3 mb-4">Torna alla lista completa</a>
            </div>
        </div>


    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il manga</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Questo manga verrà eliminato definitivamente. Vuoi procedere?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
            <form action="{{ route('manga.destroy', $manga) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="elimina definitivamente">
        </form>
        </div>
        </div>
    </div>
</div>
@endsection
