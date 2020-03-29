@extends('pages_site/fond')
@section('entete')
@stop
@section('titre')
  Page de confirmation
@stop
@section('titre_contenu')
Page de confirmation
@stop
@section('content')

<h3>{{$message}} avec success</h3>

<a href="{{ url('/membres') }}">List des membres</a>
@stop
@section('pied_page')
LicenceProServicetique 2020
@stop
