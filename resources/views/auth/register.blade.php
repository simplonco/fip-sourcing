@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{__('auth.register')}}</div>
                <div class="panel-body">
                  {!! Form::open([
                    'route' => ['register']
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

                    {!! Form::submit(__('general.submit'), ['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
