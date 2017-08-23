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
    <div class="panel-heading"> Saisissez ici vos informations personnelles
    </div>
    <div class="panel-body">
      {!! Form::model($candidate, [
        'method' => 'POST',
        'route' => ['storeCivil']
        ]) !!}

        <div class="form-group">
          {!! Form::label('civility', 'Civilité', ['class' => 'control-label']) !!}
          {!! Form::select('civility', Config::get('civil_constants.civility')); !!}
        </div>

        <div class="form-group">
          {!! Form::label('maiden_name', 'Nom de jeune fille', ['class' => 'control-label']) !!}
          {!! Form::text('maiden_name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('birth_date', 'Date de naissance', ['class' => 'control-label']) !!}
          {!! Form::date('birth_date', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('native_city', 'Lieu de naissance', ['class' => 'control-label']) !!}
          {!! Form::text('native_city', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('native_country', 'Pays de naissance', ['class' => 'control-label']) !!}
          {!! Form::text('native_country', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('nationality', 'Nationalité', ['class' => 'control-label']) !!}
          {!! Form::text('nationality', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('entry_date', 'Date d\'entrée en France', ['class' => 'control-label']) !!}
          {!! Form::date('entry_date', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('marital_status', 'Statut marital', ['class' => 'control-label']) !!}
          {!! Form::select('marital_status', Config::get('civil_constants.marital_status')); !!}
        </div>

        <div class="form-group">
          {!! Form::label('number_children', 'Nombre d\'enfants', ['class' => 'control-label']) !!}
          {!! Form::text('number_children', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('age_children', 'Âge des enfants', ['class' => 'control-label']) !!}
          {!! Form::text('age_children', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('accomodation', 'Lieu d\'hébergement', ['class' => 'control-label']) !!}
          {!! Form::select('accomodation', Config::get('civil_constants.accomodation')); !!}
        </div>

        <div class="form-group">
          {!! Form::label('number_social_security', 'N° personnel CPAM', ['class' => 'control-label']) !!}
          {!! Form::text('number_social_security', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('number_cmu', 'N° CMU', ['class' => 'control-label']) !!}
          {!! Form::text('number_cmu', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('end_visit_date', 'Date de fin de validité du titre de séjour ou de la carte d\'identité', ['class' => 'control-label']) !!}
          {!! Form::date('end_visit_date', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('address', 'Adresse', ['class' => 'control-label']) !!}
          {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('postal_code', 'Code postal', ['class' => 'control-label']) !!}
          {!! Form::text('postal_code', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('city', 'Ville', ['class' => 'control-label']) !!}
          {!! Form::text('city', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('phone', 'Téléphone fixe', ['class' => 'control-label']) !!}
          {!! Form::text('phone', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('cellphone', 'Portable', ['class' => 'control-label']) !!}
          {!! Form::text('cellphone', null, ['class' => 'form-control']) !!}
        </div>
        <h4> Personne à prévenir en cas d'urgence </h4>
        <div class="form-group">
          {!! Form::label('emergency_contact', 'Nom Prénom', ['class' => 'control-label']) !!}
          {!! Form::text('emergency_contact', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('emergency_phone', 'Tél', ['class' => 'control-label']) !!}
          {!! Form::text('emergency_phone', null, ['class' => 'form-control']) !!}
        </div>
        <hr/>

        {!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
