@extends('pages_site/fond')
@section('entete')
@stop
@section('titre')
  Club des Usagers de l'Espace galactique
@stop
@section('titre_contenu')
Création d'un nouveau membre
@stop
@section('content')

<div class="form-group">
{{-- {!! Form::open(['url' => 'creation/membre']) !!} --}}
{!! Form::model($membre,['url' => 'creation/membre']) !!}
    <div class="form-group">
        {!! Form::label('nom', 'Nom') !!}
        {!! Form::text('nom', null, ['class' => 'form-control', 'required'])!!}
	</div>
    <div class="form-group">
        {!! Form::label('prenom', 'Prenom') !!}
        {!! Form::text('prenom', null, ['class' => 'form-control', 'readonly'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('adresse', 'Adresse électronique') !!}
        {!! Form::text('adresse', null, ['class' => 'form-control', 'readonly'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '2','required'])!!}
    </div>

    {!! Form::hidden('idUser') !!}

    <p></p>

    @if (Auth::user()->isActive) 
        <div class="d-flex flex-row-reverse">
            {!! Form::submit("Creation membre", ['class' => 'btn btn-primary']) !!}
        </div>
    @endif

    {!! Form::close() !!}
</div>


@stop
@section('pied_page')
LicenceProServicetique 2020
@stop
