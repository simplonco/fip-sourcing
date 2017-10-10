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
    <div class="panel-heading"> {{__('candidate_panel.coding')}}
    </div>
    <div class="panel-body">
      {!! Form::model($candidate, [
        'method' => 'POST',
        'route' => ['storeCoding']
        ]) !!}

        <div class="form-group">
          {!! Form::label('coding', __('coding.coding'), ['class' => 'control-label']) !!}
          {!! Form::text('coding', null, ['class' => 'form-control', 'placeholder' => __('coding.coding_placeholder')]) !!}
        </div>

        <div class="form-group">
          {!! Form::label('profiles', __('coding.profiles'), ['class' => 'control-label']) !!}
          {!! Form::textarea('profiles', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit(__('general.submit'), ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
