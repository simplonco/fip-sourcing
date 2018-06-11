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
    <div class="panel-heading">{{__('former.former_add')}}</div>
    <div class="panel-body">
      {!! Form::open([
        'route' => ['admin.trainers.store']
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

        <div class="form-group">
          {!! Form::label('password', __('user.choose_user.password'), ['class' => 'control-label']) !!}
          {!! Form::password('password', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {{ Form::label('password_confirmation', __('user.choose_user.password_confirm')) }}
          {{ Form::password('password_confirmation') }}
        </div>

        <div class="form-group">
          {{ Form::label('formations[]', __('user.choose_user.formations')) }}
          {{ Form::select('formations[]', $formations, null, array('multiple' => true, 'class' => 'form-control')) }}
        </div>

        {!! Form::submit(__('general.submit'), ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
