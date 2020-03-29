@extends('pages_site/fond')
@section('entete')
@stop
@section('titre')
page d'erreur
@stop
@section('titre_contenu')
page d'erreur
@stop
@section('content')

<h3>{{$message}}</h3>

<a href="{{ url('/membres') }}">List des membres</a>
@stop
@section('pied_page')
LicenceProServicetique 2020
@stop
