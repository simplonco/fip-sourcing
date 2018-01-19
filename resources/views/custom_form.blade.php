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
    <div class="panel-heading">Questionnaire
    </div>
    <div class="panel-body">
      {!! Form::open(['route' => 'save_custom_form']) !!}
       {!! Form::token() !!}
        @foreach($questions->all() as $question)
          <div class="form-group">
            {!! Form::label($question['title'], null, ['class' => 'control-label']) !!}
            @if ($question['mandatory'])
              [Obligatoire]
            @endif
            @if(count($question['default_value']) > 1)
              {!! Form::select($question['id'], $question['default_value'], ['class' => 'form-control', 'required' => $question['mandatory']]) !!}
            @else
              {!! call_user_func_array('Form::'.$question['type'], array($question['id'], null, ['class' => 'form-control', 'placeholder' => $question['default_value'][0], 'required' => $question['mandatory']])) !!} 
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
