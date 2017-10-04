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
    <div class="panel-heading"> {{__('candidate_panel.operationnal')}}
    </div>
    <div class="panel-body">
      {!! Form::model($candidate, [
        'method' => 'POST',
        'route' => ['storeOperationnal']
        ]) !!}

        <div class="form-group">
          {!! Form::label('availability', __('operationnal.availability', ['start_date' => Auth::user()->formations()->first()->begin_session, 'end_date' => Auth::user()->formations()->first()->end_session]), ['class' => 'control-label']) !!}
          {!! Form::text('availability', null, ['required' => true, 'class' => 'form-control', 'placeholder' => 'Pas de souci!']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('efforts', __('operationnal.efforts'), ['class' => 'control-label']) !!}
          {!! Form::text('efforts', null, ['required' => true, 'class' => 'form-control', 'placeholder' => 'Mon site perso de A à Z!']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('computers', __('operationnal.computers'), ['class' => 'control-label']) !!}
          {!! Form::textarea('computers', null, ['required' => true, 'class' => 'form-control', 'placeholder' => 'Interview', 'placeholder' => 'Je joue beaucoup à Pong.']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('heard_of', __('operationnal.heard_of'), ['class' => 'control-label']) !!}
          {!! Form::textarea('heard_of', null, ['class' => 'form-control', 'placeholder' => 'Aux soirées de l\'ambassadeur']) !!}
        </div>

        {!! Form::submit(__('general.submit'), ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
