@extends('pages_site/fond')

@section('entete')
@stop

@section('titre')
    Club des Usagers de l'Espace galactique
@stop

@section('titre_contenu')
    Liste des membres
@stop

@section('content')
    <table class="table table-sm table-striped table-hover">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            @if (Auth::check())
                <th scope="col">Adresse email</th>
            @endif
            
            <th scope="col">Option</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($les_membres as $membre)
                <tr>
                    <td>{{ $membre->nom }}</td>
                    <td>{{ $membre->prenom }}</td>
                   
                    @if (Auth::check())
                        <td>{{ $membre->adresse }}</td>
                    @endif
                    <td>
                        @if (Auth::check() && Auth::id() == $membre->idUser)
                            <a class="btn btn-success" href="/modifier/{{ $membre->id }}">Modifier</a>
                        @else
                        --
                        @endif
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
