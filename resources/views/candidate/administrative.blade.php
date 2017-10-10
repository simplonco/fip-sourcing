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
    <div class="panel-heading"> {{__('candidate_panel.administrative')}}
    </div>
    <div class="panel-body">
      {!! Form::model($candidate, [
        'method' => 'POST',
        'route' => ['storeAdministrative']
        ]) !!}

        <div class="form-group">
          {!! Form::label('nationality', __('administrative.nationality'), ['class' => 'control-label']) !!}
          {!! Form::text('nationality', null, ['class' => 'form-control', 'placeholder' => __('administrative.nationality_placeholder')]) !!}
        </div>

        <div class="form-group">
          {!! Form::label('birth_date', __('administrative.birth_date'), ['class' => 'control-label']) !!}
          {!! Form::date('birth_date', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('gender', __('administrative.gender'), ['class' => 'control-label']) !!}
          {!! Form::select('gender', __('administrative.gender_select')); !!}
        </div>

        <div class="form-group">
          {!! Form::label('phone', __('administrative.phone'), ['class' => 'control-label']) !!}
          {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => __('administrative.phone_placeholder')]) !!}
        </div>

        <div class="form-group">
          {!! Form::label('postal_code', __('administrative.postal_code'), ['class' => 'control-label']) !!}
          {!! Form::text('postal_code', null, ['class' => 'form-control', 'placeholder' => __('administrative.postal_code_placeholder')]) !!}
        </div>

        <div class="form-group">
          {!! Form::label('city', __('administrative.city'), ['class' => 'control-label']) !!}
          {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => __('administrative.city_placeholder')]) !!}
        </div>

        <div class="form-group">
          {!! Form::label('address', __('administrative.address'), ['class' => 'control-label']) !!}
          {!! Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => __('administrative.address_placeholder')]) !!}
        </div>

        <div class="form-group">
          {!! Form::label('status', __('administrative.status'), ['class' => 'control-label']) !!}
          {!! Form::text('status', null, ['class' => 'form-control', 'placeholder' => __('administrative.status_placeholder')]) !!}
        </div>

        <div class="form-group">
          {!! Form::label('number_pole_emploi', __('administrative.number_pole_emploi'), ['class' => 'control-label']) !!}
          {!! Form::text('number_pole_emploi', null, ['class' => 'form-control', 'placeholder' => __('administrative.number_pole_emploi_placeholder')]) !!}
        </div>

        <div class="form-group">
          {!! Form::label('pole_emploi', __('administrative.pole_emploi'), ['class' => 'control-label']) !!}
          {!! Form::text('pole_emploi', null, ['class' => 'form-control', 'placeholder' => __('administrative.pole_emploi_placeholder')]) !!}
        </div>

        <div class="form-group">
          {!! Form::label('number_social_security', __('administrative.number_social_security'), ['class' => 'control-label']) !!}
          {!! Form::text('number_social_security', null, ['class' => 'form-control', 'placeholder' => __('administrative.number_social_security_placeholder')]) !!}
        </div>

        <div class="form-group">
          {!! Form::label('obtained_diploma', __('administrative.obtained_diploma'), ['class' => 'control-label']) !!}
          {!! Form::text('obtained_diploma', null, ['class' => 'form-control', 'placeholder' => __('administrative.obtained_diploma_placeholder')]) !!}
        </div>

        <div class="form-group">
          {!! Form::label('cdd', __('administrative.cdd'), ['class' => 'control-label']) !!}
          {!! Form::date('cdd', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit(__('general.submit'), ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
