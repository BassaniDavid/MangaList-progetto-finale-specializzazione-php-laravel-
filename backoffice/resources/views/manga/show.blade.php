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
            <p>generi:
                @forelse ($manga->genres as $genre)
                    <span>{{$genre->genere}}</span>
                @empty
                    nessun genere assegnato
                @endforelse
            </p>
            <a class="btn btn-outline-warning p-0 px-2 mb-3" href="{{ route('manga.edit', $manga) }}">modifica</a>
            <button type="button" class="btn btn-outline-danger p-0 px-2 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                elimina
            </button>
            <a href="{{ route('manga.index') }}" class="btn btn-secondary">Torna alla lista completa</a>

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
