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
    <div class="panel-heading"> Indiquez vos profils pour l'apprentissage en ligne
    </div>
    <div class="panel-body">
      {!! Form::model($candidate, [
        'method' => 'POST',
        'route' => ['storeProfile']
        ]) !!}

        <div class="form-group">
          {!! Form::label('codecademy_profile', 'Profil codecademy', ['class' => 'control-label']) !!}
          {!! Form::text('codecademy_profile', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
          {!! Form::label('openclassroom_profile', 'Profil OpenClassroom', ['class' => 'control-label']) !!}
          {!! Form::text('openclassroom_profile', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('other_profile', 'Autres profils', ['class' => 'control-label']) !!}
          {!! Form::textarea('other_profile', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
