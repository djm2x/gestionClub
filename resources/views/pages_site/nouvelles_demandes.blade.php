@extends('pages_site/fond')

@section('entete')
@stop

@section('titre')
    Club des Usagers de l'Espace galactique
@stop

@section('titre_contenu')
    Liste des nouvelles demandes
@stop

@section('content')
    <table class="table table-sm table-striped table-hover">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Statut</th>
            <th scope="col">Option</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($users as $e)
                <tr>
                    <td>{{ $e->name }}</td>
                    <td>{{ $e->email }}</td>
                    <td>{{ $e->isActive ? 'Actif' : 'Pas actif' }}</td>
                    <td>
                        <a class="btn btn-warning" href="/changeStatusAccount/{{ $e->id }}">
                            {{ $e->isActive ? 'Désactiver' : 'Activer'}}
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if (Auth::check())
        <div class="d-flex flex-row-reverse">
            <a class="btn btn-primary" href="{{ url('/creer') }}"> Créer nouveau membre </a>
        </div>
    @endif
   
@stop

@section('pied_page')
    LicenceProServicetique 2020
@stop
