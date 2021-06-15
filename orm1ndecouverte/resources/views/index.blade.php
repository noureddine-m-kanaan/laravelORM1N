@extends('layouts.layout')

@section('titrePage')
    Liste des Mangas
@endsection

@section('titreItem')
    <h1>Tous les mangas :</h1>
@endsection

@section('contenu')

    @if(session()->has('info'))
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-body">
                <p class="card-text">{{ session('info') }}</p>
            </div>
        </div>
    @endif

    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title">Nous avons sélectionné pour vous :</h5>
            
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th class="table-primary">#</th>
                        <th>Titre</th>
                        <th class="table-primary">Genre</th>
                        <th></th>
                        <th></th>
                        @auth
                            <th><a class="btn btn-success" href="{{ route('mangas.create') }}">Nouveau Manga</a></th>
                        @endauth
                    </tr>
                    </thead>
                    @foreach($mangas as $manga)
                    
                        <tr>
                            <td class="table-primary"> {{ $manga->id }} </td>
                            <td><strong>{{ $manga->titre}}</strong>  </td>
                            <td class="table-primary"> {{ $manga->genre->lib_genre }}</td>
                            <td><a class="btn btn-primary" href="{{ route('mangas.show', $manga->id) }}">Voir</a></td>
                            @auth
                                <td><a class="btn btn-warning" href="{{ route('mangas.edit', $manga->id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('mangas.destroy', $manga->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            @endauth
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection


