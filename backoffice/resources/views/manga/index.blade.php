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
                        <td>
                            <button type="button" class="btn btn-outline-danger p-0 px-2" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $manga->id }}">
                                elimina
                            </button>
                        </td>
                    </tr>
                    @endforeach
            </table>
        </div>

        {{-- @dd($mangas) --}}

    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
