@extends('layouts.layout')

@section('titrePage')
    Information sur le Manga
@endsection

@section('contenu')
    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title">Titre : {{ $manga->titre }}</h5>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Dessinateur : {{ $manga->nomDessinateur .' '. $dessinateur->prenom_dessinateur }}</p>
                <p>Scénariste : {{ $manga->nomScenariste .' '.$scenariste->prenom_scenariste }}</p>
                <p>Genre : {{ $manga->lib_genre }}</p>
                <hr>
                <p>Prix : {{ $manga->prix }}</p>
            </div>
        </div>
    </div>
@endsection
