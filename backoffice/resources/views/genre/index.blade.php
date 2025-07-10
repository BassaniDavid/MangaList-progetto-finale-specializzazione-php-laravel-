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
                    <th></th>
                </tr>

                    @foreach ($genres as $genre)
                    <tr>
                        <td>{{ $genre->genere }}</td>
                        <td>{{ $genre->descrizione }}</td>
                        <td class="text-center">
                            <a class="btn btn-outline-warning p-0 px-2" href="{{ route('genre.edit', $genre) }}">modifica</a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-outline-danger p-0 px-2" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $genre->id }}">
                                elimina
                            </button>
                        </td>
                    </tr>
                    @endforeach
            </table>
        </div>

        {{-- @dd($genres) --}}

    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il genere</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Questo genere verrà eliminato definitivamente. Vuoi procedere?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <form id="deleteForm" method="POST">
          @csrf
          @method('DELETE')
          <input type="submit" class="btn btn-danger" value="elimina definitivamente">
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  const deleteModal = document.getElementById('deleteModal');
  deleteModal.addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget;
    const genreId = button.getAttribute('data-id');
    const form = document.getElementById('deleteForm');
    form.action = `/genre/${genreId}`;
  });
</script>

@endsection
