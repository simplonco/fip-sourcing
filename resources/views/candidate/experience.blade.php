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
    <div class="panel-heading"> Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?
</div>
    <div class="panel-body">
      {!! Form::model($candidate, [
        'method' => 'POST',
        'route' => ['storeExperience']
        ]) !!}

        <div class="form-group">
          {!! Form::textarea('experience_programming', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
