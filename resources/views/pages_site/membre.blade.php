@extends('pages_site/fond')
@section('entete')
@stop
@section('titre')
Infos Membre
@stop
@section('titre_contenu')
Infos Membre
@stop
@section('content')

<h2> Infos Membre </h2>
<h3>
{{ $un_membre->prenom }} {{ $un_membre->nom }}
</h3>
<div class='h2'>
{{ $un_membre->adresse }}
</div>

<p>
    description : {{ $un_membre->description }}
</p>

<a href="{{ url('/membres') }}">List des membres</a>
@stop
@section('pied_page')
LicenceProServicetique 2020
@stop
