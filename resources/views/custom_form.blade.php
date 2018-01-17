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
      {!! Form::open(['route' => 'save_custom_form']) !!}
        @foreach($questions->all() as $question)
          <div class="form-group">
            {!! Form::label($question['title'], null, ['class' => 'control-label']) !!}
            @if(count($question['default_value']) > 1)
              {!! Form::select($question['id'], $question['default_value'], ['class' => 'form-control']) !!}
            @else
              {!! Form::text($question['id'], null, ['class' => 'form-control', 'placeholder' => $question['default_value'][0]]) !!}
            @endif
          </div>
        @endforeach
        
        {!! Form::submit(__('general.submit'), ['class' => 'btn btn-primary']) !!}

      {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
