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
    <div class="panel-heading"> Expériences professionnelles
    </div>
    <div class="panel-body">
      {!! Form::model($candidate, [
        'method' => 'POST',
        'route' => ['storeProExperiences']
        ]) !!}

        <h4>Dernière expérience professionnelle</h4>
        <div class="form-group">
          {!! Form::label('society_name1', 'Nom de l\'entreprise', ['class' => 'control-label']) !!}
          {!! Form::text('society_name1', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('society_address1', 'Adresse de l\'entreprise', ['class' => 'control-label']) !!}
          {!! Form::textarea('society_address1', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('contract_type1', 'Type de contrat', ['class' => 'control-label']) !!}
          {!! Form::text('contract_type1', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('contract_duration1', 'Durée de contrat', ['class' => 'control-label']) !!}
          {!! Form::text('contract_duration1', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('position_held1', 'Poste occupé', ['class' => 'control-label']) !!}
          {!! Form::text('position_held1', null, ['class' => 'form-control']) !!}
        </div>

        <h4>Avant-dernière expérience professionnelle</h4>
        <div class="form-group">
          {!! Form::label('society_name2', 'Nom de l\'entreprise', ['class' => 'control-label']) !!}
          {!! Form::text('society_name2', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('society_address2', 'Adresse de l\'entreprise', ['class' => 'control-label']) !!}
          {!! Form::textarea('society_address2', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('contract_type2', 'Type de contrat', ['class' => 'control-label']) !!}
          {!! Form::text('contract_type2', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('contract_duration2', 'Durée de contrat', ['class' => 'control-label']) !!}
          {!! Form::text('contract_duration2', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('position_held2', 'Poste occupé', ['class' => 'control-label']) !!}
          {!! Form::text('position_held2', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
