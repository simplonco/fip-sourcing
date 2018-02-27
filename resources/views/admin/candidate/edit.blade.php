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
    <div class="panel-heading">{{__('user.candidate_modification')}} {!! $candidate->last_name !!}</div>
    <div class="panel-body">
      {!! Form::model($candidate, [
        'method' => 'POST',
        'route' => ['candidateUpdate', $candidate->id]
        ]) !!}

        <div class="form-group">
          {!! Form::label('first_name', __('user.choose_user.first_name'), ['class' => 'control-label']) !!}
          {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('last_name', __('user.choose_user.last_name'), ['class' => 'control-label']) !!}
          {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('email', __('user.choose_user.email'), ['class' => 'control-label']) !!}
          {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit(__('general.submit'), ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
