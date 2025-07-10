@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        Dashboard
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card ">
                <div class="card-header">
                    <h2 class="text-center">gestione dati</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="jumbotron p-5 rounded-3">
                        <div class="row text-center d-flex justify-content-between">
                            <a href="{{ route('manga.index') }}" class="col-md-5 col-12 btn py-5 rounded-4 btn-outline-warning bg-warning-subtle">
                                <h2 class="fs-1 p-0 m-0  pb-4"> <i class="bi bi-book me-3"></i> Manga</h2>
                                <h4>totale attuale: {{ $totalMangas }}</h4>
                            </a>
                            <a href="{{ route('genre.index') }}" class="col-md-5 col-sm-12 btn py-5 rounded-4 btn-outline-info bg-info-subtle">
                                <h2 class="fs-1 p-0 m-0 pb-4"> <i class="bi bi-list-ul me-3"></i> Generi</h2>
                                <h4>totale attuale: {{ $totalGenres }}</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
