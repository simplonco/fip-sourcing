@extends('layouts.app')

@section('content')

@if(Session::has('flash_message'))
<div class="alert alert-success">
  {{ Session::get('flash_message') }}
</div>
@endif

@if($errors->any())
<div class="alert alert-danger">
  @foreach($errors->all() as $error)
  <p>{{ $error }}</p>
  @endforeach
</div>
@endif

<div class="col-sm-offset-3 col-sm-6">
  <div class="panel panel-info">
    <div class="panel-heading">Modification de l'expérience professionnelle'</div>
    <div class="panel-body">
      {!! Form::model($pro_experience, [
        'method' => 'POST',
        'route' => ['proExperienceUpdate', $pro_experience->id]
        ]) !!}

        <div class="form-group">
          {!! Form::label('society_name', 'Nom de l\'entreprise', ['class' => 'control-label']) !!}
          {!! Form::text('society_name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('society_address', 'Adresse de l\'entreprise', ['class' => 'control-label']) !!}
          {!! Form::textarea('society_address', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('contract_type', 'Type de contrat', ['class' => 'control-label']) !!}
          {!! Form::text('contract_type', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('contract_duration', 'Durée de contrat', ['class' => 'control-label']) !!}
          {!! Form::text('contract_duration', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('position_held', 'Poste occupé', ['class' => 'control-label']) !!}
          {!! Form::text('position_held', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Ajouter', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
