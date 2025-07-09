@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

            </div>
            <div class="jumbotron p-5 mb-4 bg-light rounded-3">
                <div class="container py-5">
                    <h1 class="fs-2 text-center">Benvenuto nella dashboard!</h1>
                    <p class="lead">Qui puoi vedere un riepilogo dei tuoi manga e generi.</p>
                    <hr class="my-4">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Totale Manga: {{ $totalMangas }}</h2>
                        </div>
                        <div class="col-md-6">
                            <h2>Totale Generi: {{ $totalGenres }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
