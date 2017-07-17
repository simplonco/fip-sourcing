@extends('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
  <div class="panel panel-info">
    <div class="panel-heading">Ajout d'un formateur</div>
    <div class="panel-body">
      {!! Form::open([
        'route' => 'formerStore'
        ]) !!}

        <div class="form-group">
          {!! Form::label('firstName', 'Prénom', ['class' => 'control-label']) !!}
          {!! Form::text('firstName', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('lastName', 'Nom', ['class' => 'control-label']) !!}
          {!! Form::text('lastName', null, ['class' => 'form-control']) !!}
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

        {!! Form::submit('Ajouter', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
