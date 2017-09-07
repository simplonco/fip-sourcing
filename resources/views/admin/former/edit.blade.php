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
    <div class="panel-heading">Modification du formateur {!! $former->last_name !!}</div>
    <div class="panel-body">
      {!! Form::model($former, [
        'method' => 'POST',
        'route' => ['formerUpdate', $former->id]
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
          {{ Form::label('formations[]', 'Formation') }}
          {{ Form::select('formations[]', $formations, null, array('multiple' => true, 'class' => 'form-control')) }}
        </div>

        {!! Form::submit('Modifier', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection