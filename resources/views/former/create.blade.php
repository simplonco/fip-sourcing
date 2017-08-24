@extends('layouts.app')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
  @foreach($errors->all() as $error)
  <p>{{ $error }}</p>
  @endforeach
</div>
@endif

<div class="col-sm-offset-3 col-sm-6">
  <div class="panel panel-info">
    <div class="panel-heading">Ajout d'un formateur</div>
    <div class="panel-body">
      {!! Form::open([
        'route' => ['formerStore']
        ]) !!}

        <div class="form-group">
          {!! Form::label('first_name', 'Prénom', ['class' => 'control-label']) !!}
          {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('last_name', 'Nom', ['class' => 'control-label']) !!}
          {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('email', 'Adresse mail', ['class' => 'control-label']) !!}
          {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('password', 'Mot de passe', ['class' => 'control-label']) !!}
          {!! Form::password('password', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {{ Form::label('password_confirmation', 'Confirmation du mot de passe') }}
          {{ Form::password('password_confirmation') }}
        </div>

        <div class="form-group {!! $errors->has('formation_id') ? 'has-error' : '' !!}">
          {{ Form::label('formation', 'Formation') }}
          {{ Form::select('formation', $formations, null) }}
        </div>

        {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
