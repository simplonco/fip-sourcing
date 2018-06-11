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
    <div class="panel-heading">{{__("formation.edit")}} {!! $formation->name !!}</div>
    <div class="panel-body">
      {!! Form::model($formation, [
        'method' => 'POST',
        'route' => ['trainer.courses.update', $formation->id]
        ]) !!}

        <div class="form-group">
          {!! Form::label('name', __('formation.choose_formation.name'), ['class' => 'control-label']) !!}
          {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('description', __('formation.choose_formation.description'), ['class' => 'control-label']) !!}
          {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('city', __('formation.choose_formation.city'), ['class' => 'control-label']) !!}
          {!! Form::text('city', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('year', __('formation.choose_formation.year'), ['class' => 'control-label']) !!}
          {!! Form::text('year', null, ['class' => 'form-control']) !!}
        </div>


        <div class="form-group">
          {!! Form::label('begin_session', __('formation.choose_formation.begin_session'), ['class' => 'control-label']) !!}
          {!! Form::date('begin_session', null, ['class' => 'form-control']) !!}
        </div>


        <div class="form-group">
          {!! Form::label('end_session', __('formation.choose_formation.end_session'), ['class' => 'control-label']) !!}
          {!! Form::date('end_session', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit(__('general.submit'), ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
