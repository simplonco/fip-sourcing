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
    <div class="panel-heading">Ajouter une question</div>
    <div class="panel-body">
      {!! Form::open([
        'route' => ['save_question']
        ]) !!}
        {!! Form::token() !!}
        
        <div class="form-group">
          {!! Form::label('type', 'Type de question', ['class' => 'control-label question_type']) !!}
          {!! Form::select('type', ['checkbox' => 'Case à cocher', 'email' => 'Courriel', 'date' => 'Date', 'select' => 'Liste déroulante', 'number' => 'Nombre', 'text' => 'Texte court', 'textarea' => 'Texte long'], ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
          {!! Form::label('category', 'Categorie', ['class' => 'control-label']) !!}
          {!! Form::select('category', $categories, ['class' => 'form-control']) !!}
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
          {!! Form::label('choice_1', 'Placeholder (pour donner un exemple du format attendu)', ['class' => 'control-label choice_1']) !!}
          {!! Form::label('choice_1', 'Choix 1', ['class' => 'control-label choice_2']) !!}
          {!! Form::text('choice_1', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('choice_2', 'Choix 2', ['class' => 'control-label choice_2']) !!}
          {!! Form::text('choice_2', null, ['class' => 'form-control choice_2']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('choice_3', 'Choix 3', ['class' => 'control-label choice_3']) !!}
          {!! Form::text('choice_3', null, ['class' => 'form-control choice_3']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('choice_4', 'Choix 4', ['class' => 'control-label choice_4']) !!}
          {!! Form::text('choice_4', null, ['class' => 'form-control choice_4']) !!}
        </div>
        
        {!! Form::submit(__('general.submit'), ['class' => 'btn btn-primary']) !!}
        
        {!! Form::close() !!}
      </div>
      <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
      crossorigin="anonymous">
    </script>
    <script>
      $( document ).ready(function() {
        $(".choice_2").hide();
        $(".choice_3").hide();
        $(".choice_4").hide();
        $('select').on('change', function() {
          if( this.value == 'select' ){
            $(".choice_1").hide();
            $(".choice_2").show();
            $(".choice_3").show();
            $(".choice_4").show();
          } else {
            $(".choice_1").show();
            $(".choice_2").hide();
            $(".choice_2").val("");
            $(".choice_3").hide();
            $(".choice_3").val("");
            $(".choice_4").hide();
            $(".choice_4").val("");
          }
        });
      });
    </script>
  </div>
</div>
</div>

@endsection
