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
    <div class="panel-heading"> Prescripteur
    </div>
    <div class="panel-body">
      {!! Form::model($candidate, [
        'method' => 'POST',
        'route' => ['storePrescriber']
        ]) !!}

        <div class="form-group">
          {!! Form::label('prescriber_contact', 'Nom', ['class' => 'control-label']) !!}
          {!! Form::text('prescriber_contact', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('prescriber_phone', 'Tél', ['class' => 'control-label']) !!}
          {!! Form::text('prescriber_phone', null, ['class' => 'form-control']) !!}
        </div>
        <hr/>

        {!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
