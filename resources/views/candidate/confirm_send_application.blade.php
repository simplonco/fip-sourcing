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
    <div class="panel-heading"> Loisirs
    </div>
    <div class="panel-body">
      {!! Form::model($candidate, [
        'method' => 'POST',
        'route' => ['sendApplication']
        ]) !!}

        <div class="form-group">
          <p>
            Votre candidature doit être envoyée avant le {{Auth::user()->formations()->first()->begin_session}} à minuit
          </p>
          Attention, l'envoi de votre candidature est définitif.
        </div>

        {!! Form::submit('Envoyer votre candidature', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
