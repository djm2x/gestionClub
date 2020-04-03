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

<div class="form-group">
{!! Form::model($un_membre,['url' => url('miseAJour',$un_membre->id),'method' => 'PATCH']) !!}
    <div class="form-group">
        {{ Form::label('nom', 'Nom') }}
        {{ Form::text('nom', null, ['class' => 'form-control']) }}
	</div>
   <div class="form-group">
        {{ Form::label('prenom', 'Prenom :') }}
        {{ Form::text('prenom', null, ['class' => 'form-control', 'readonly']) }}
    </div>
    <div class="form-group">
        {{ Form::label('adresse', 'Adresse électronique') }}
        {{ Form::text('adresse', null, ['class' => 'form-control', 'readonly']) }}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '2','required'])!!}
    </div>

    {!! Form::hidden('idUser', 'idUser') !!}

    <p></p>

    @if (Auth::user()->isActive) 
        <div class="d-flex flex-row-reverse">
            {!! Form::submit("Modifier membre", array('class' => 'btn btn-primary')) !!}
        </div>
    @endif

    {!! Form::close() !!}
</div>

@stop
@section('pied_page')
LicenceProServicetique 2020
@stop
