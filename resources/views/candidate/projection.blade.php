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
    <div class="panel-heading"> {{__('candidate_panel.projection')}}
    </div>
    <div class="panel-body">
      {!! Form::model($candidate, [
        'method' => 'POST',
        'route' => ['storeProjection']
        ]) !!}

        <div class="form-group">
          {!! Form::label('hero', __('projection.hero'), ['class' => 'control-label']) !!}
          {!! Form::textarea('hero', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('dev_qualities', __('projection.dev_qualities'), ['class' => 'control-label']) !!}
          {!! Form::textarea('dev_qualities', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('personal_goal', __('projection.personal_goal'), ['class' => 'control-label']) !!}
          {!! Form::textarea('personal_goal', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('dev_point', __('projection.dev_point'), ['class' => 'control-label']) !!}
          {!! Form::textarea('dev_point', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('superpower', __('projection.superpower'), ['class' => 'control-label']) !!}
          {!! Form::textarea('superpower', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit(__('general.submit'), ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
