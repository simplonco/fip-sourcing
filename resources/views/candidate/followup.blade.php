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
    <div class="panel-heading"> Suivi
    </div>
    <div class="panel-body">
      {!! Form::model($candidate, [
        'method' => 'POST',
        'route' => ['storeFollowup']
        ]) !!}

        <div class="form-group">
          {!! Form::label('followup_device', 'Dispositif', ['class' => 'control-label']) !!}
          {!! Form::select('followup_device', Config::get('followup_constants.followup_device')); !!}
        </div>

        <div class="form-group">
          {!! Form::label('sent_by', 'Vous êtes envoyé par', ['class' => 'control-label']) !!}
          {!! Form::select('sent_by', Config::get('followup_constants.sent_by')); !!}
        </div>

        <div class="form-group">
          {!! Form::label('local_mission', 'Quelle mission locale?', ['class' => 'control-label']) !!}
          {!! Form::select('sent_by', Config::get('followup_constants.local_mission')); !!}
        </div>

        {!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
