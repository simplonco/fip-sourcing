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
    <div class="panel-heading">Ajout d'une formation</div>
    <div class="panel-body">
      {!! Form::open([
        'route' => ['formationStore']
        ]) !!}

        <div class="form-group">
          {!! Form::label('name', 'Nom', ['class' => 'control-label']) !!}
          {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
          {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('city', 'Ville', ['class' => 'control-label']) !!}
          {!! Form::text('city', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('year', 'Année', ['class' => 'control-label']) !!}
          {!! Form::text('year', null, ['class' => 'form-control']) !!}
        </div>


        <div class="form-group">
          {!! Form::label('begin_session', 'Début de la session d\'inscription', ['class' => 'control-label']) !!}
          {!! Form::date('begin_session', null, ['class' => 'form-control']) !!}
        </div>


        <div class="form-group">
          {!! Form::label('end_session', 'Fin de la session d\'inscription', ['class' => 'control-label']) !!}
          {!! Form::date('end_session', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
