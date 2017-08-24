@extends('layouts.app')

@section('content')

@if(Session::has('flash_message'))
<div class="alert alert-success">
  {{ Session::get('flash_message') }}
</div>
@endif

@if($errors->any())
<div class="alert alert-danger">
  @foreach($errors->all() as $error)
  <p>{{ $error }}</p>
  @endforeach
</div>
@endif

<div class="col-sm-offset-3 col-sm-6">
  <div class="panel panel-info">
    <div class="panel-heading">Ajout d'une formation rémunérée</div>
    <div class="panel-body">
      {!! Form::open([
        'route' => ['paidFormationStore']
        ]) !!}

        <div class="form-group">
          {!! Form::label('name', 'Intitulé de la formation', ['class' => 'control-label']) !!}
          {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('begin_date', 'Date de début', ['class' => 'control-label']) !!}
          {!! Form::date('begin_date', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('end_date', 'Date de fin', ['class' => 'control-label']) !!}
          {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('contact', 'Coordonnées du centre de formation', ['class' => 'control-label']) !!}
          {!! Form::text('contact', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
