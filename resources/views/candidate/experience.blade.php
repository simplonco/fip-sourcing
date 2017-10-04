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
    <div class="panel-heading">{{__('candidate_panel.experience')}}
    </div>
    <div class="panel-body">
      {!! Form::model($candidate, [
        'method' => 'POST',
        'route' => ['storeExperience']
        ]) !!}

        <div class="form-group">
          {!! Form::label('experience_programming', __('experience.experience_programming'), ['class' => 'control-label']) !!}
          {!! Form::textarea('experience_programming', null, ['required' => true, 'class' => 'form-control', 'placeholder' => __('experience.experience_programming_placeholder')]) !!}
        </div>
        <div class="form-group">
          {!! Form::label('course', __('experience.course'), ['class' => 'control-label']) !!}
          {!! Form::textarea('course', null, ['required' => true, 'class' => 'form-control', 'placeholder' => __('experience.course_placeholder')]) !!}
        </div>
        <div class="form-group">
          {!! Form::label('english', __('experience.english'), ['class' => 'control-label']) !!}
          {!! Form::select('english', __('experience.english_select')); !!}
        </div>
        <div class="form-group">
          {!! Form::label('today', __('experience.today'), ['class' => 'control-label']) !!}
          {!! Form::textarea('today', null, ['required' => true, 'class' => 'form-control', 'placeholder' => __('experience.today_placeholder')]) !!}
        </div>

        {!! Form::submit(__('general.submit'), ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
