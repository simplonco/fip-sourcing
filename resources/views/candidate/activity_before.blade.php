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
    <div class="panel-heading"> Activité précédant la formation
    </div>
    <div class="panel-body">
      {!! Form::model($candidate, [
        'method' => 'POST',
        'route' => ['storeActivityBefore']
        ]) !!}

        <div class="form-group">
          {!! Form::label('scholarity', 'Scolarité', ['class' => 'control-label']) !!}
          {!! Form::select('scholarity', Config::get('activity_before_constants.scholarity')); !!}
        </div>

        <div class="form-group">
          {!! Form::label('native_language', 'Langue maternelle', ['class' => 'control-label']) !!}
          {!! Form::text('native_language', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('last_class', 'Dernière classe fréquenté', ['class' => 'control-label']) !!}
          {!! Form::text('last_class', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('last_school', 'Dernier établissement fréquenté', ['class' => 'control-label']) !!}
          {!! Form::text('last_school', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('end_scholarity_date', 'Date de sortie du système scolaire', ['class' => 'control-label']) !!}
          {!! Form::date('end_scholarity_date', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('reason', 'Motif', ['class' => 'control-label']) !!}
          {!! Form::text('reason', null, ['class' => 'form-control']) !!}
        </div>

        <h4>Diplôme</h4>
        <div class="form-group">
          {!! Form::label('diploma', 'Avez-vous obtenu un diplôme?', ['class' => 'control-label']) !!}
          {!! Form::select('diploma', Config::get('activity_before_constants.diploma')); !!}
        </div>

        <div class="form-group">
          {!! Form::label('obtained_diploma', 'Diplôme obtenu', ['class' => 'control-label']) !!}
          {!! Form::text('obtained_diploma', null, ['class' => 'form-control']) !!}
        </div>


        <h4>Examen</h4>
        <div class="form-group">
          {!! Form::label('exam', 'Avez-vous passé un examen?', ['class' => 'control-label']) !!}
          {!! Form::select('exam', Config::get('activity_before_constants.diploma')); !!}
        </div>

        <div class="form-group">
          {!! Form::label('passed_exam', 'Examen présenté', ['class' => 'control-label']) !!}
          {!! Form::text('passed_exam', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('english', 'Niveau en anglais (parlé/écrit)', ['class' => 'control-label']) !!}
          {!! Form::text('english', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
