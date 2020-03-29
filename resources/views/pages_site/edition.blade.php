@extends('pages_site/fond')
@section('entete')
@stop
@section('titre')
  Club des Usagers de l'Espace galactique
@stop
@section('titre_contenu')
Modification des infos du membre
@stop
@section('content')

<div class="formgroup">
{!! Form::model($un_membre,['url' => url('miseAJour',$un_membre->id),'method' => 'PATCH']) !!}
    <div class="formgroup">
	{{ Form::label('nom', 'Nom') }}
	{{ Form::text('nom') }}
	</div>
   <div class="formgroup">
        {{ Form::label('prenom', 'Prenom :') }}
        {{ Form::text('prenom', null, ['class' => 'form-control', 'readonly']) }}
    </div>
    <div class="formgroup">
        {{ Form::label('adresse', 'Adresse électronique') }}
        {{ Form::text('adresse', null, ['class' => 'form-control', 'readonly']) }}
    </div>
    <div class="formgroup">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', null, ['class' => 'formcontrol', 'rows' => '2','required'])!!}
    </div>

    {!! Form::hidden('idUser', 'idUser') !!}

    <p></p>

    {!! Form::submit("Modifier membre", array('class' => 'btn btn-info')) !!}
    {!! Form::close() !!}
</div>

@stop
@section('pied_page')
LicenceProServicetique 2020
@stop
