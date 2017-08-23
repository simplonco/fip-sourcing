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
    <div class="panel-heading"> Disponibilité
    </div>
    <div class="panel-body">
      {!! Form::model($candidate, [
        'method' => 'POST',
        'route' => ['storeAvailability']
        ]) !!}

        <div class="form-group">
          {!! Form::label('availability', 'Êtes-vous disponible pour suivre une formation de 6 mois à temps plein (35h/semaine) ?', ['class' => 'control-label']) !!}
          {!! Form::text('availability', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('constraints', 'Si non, quelles sont vos contraintes ?', ['class' => 'control-label']) !!}
          {!! Form::text('constraints', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('income', 'Cette formation n’ouvre pas droit à une rémunération spécifique (mais les personnes  qui bénéficient d’aides de Pôle Emploi, du RSA ou de la Mission Locale se les verront   maintenir sous réserve du respect des conditions). Comment allez-vous financer votre vie quotidienne durant les 6 mois de formation?', ['class' => 'control-label']) !!}
          {!! Form::textarea('income', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
