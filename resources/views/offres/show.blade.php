@extends('layouts.app')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Titre : {{ $offre->titre_emploi }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Secteur d'emploi : {{ $offre->secteur_emploi }}</p>
                <hr>
                <p>{{ $offre->description }}</p>
            </div>
        </div>
    </div>

    @endsection
