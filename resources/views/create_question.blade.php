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
    <div class="panel-heading">{{__('formation.add')}}</div>
    <div class="panel-body">
      {!! Form::open([
        'route' => ['save_question']
        ]) !!}

        <div class="form-group">
          {!! Form::label('category', 'Categorie', ['class' => 'control-label']) !!}
          {!! Form::select('name', $categories, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('question', 'Question', ['class' => 'control-label']) !!}
          {!! Form::textarea('question', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('ponderation', 'Ponderation', ['class' => 'control-label']) !!}
          {!! Form::number('ponderation', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('goal', 'Goal', ['class' => 'control-label']) !!}
          {!! Form::textarea('goal', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('mandatory', 'Mandatory', ['class' => 'control-label']) !!}
          {!! Form::checkbox('mandatory', true, true, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('choice_1', 'Choice 1', ['class' => 'control-label']) !!}
          {!! Form::text('choice_1', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('choice_2', 'Choice 2', ['class' => 'control-label']) !!}
          {!! Form::text('choice_2', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('choice_3', 'Choice 3', ['class' => 'control-label']) !!}
          {!! Form::text('choice_3', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('choice_4', 'Choice 4', ['class' => 'control-label']) !!}
          {!! Form::text('choice_4', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit(__('general.submit'), ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
