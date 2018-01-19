@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      
      
      <div class="panel panel-info">
        <div class="panel-heading">Réponses du candidat {{$answers[0]->candidate->first_name.' '.$answers[0]->candidate->last_name}}</div>
        <div class="panel-body">
          
            @foreach($answers as $answer)
            <div class="row">
              <div class="col-md-3">
                <b>{{$answer->question->title}}</b>
              </div>
              <div class="col-md-3">
                {{$answer->value}}
              </div>
            </div>
            @endforeach
          
        </div>
      </div>
    </div>
    
  </div>
</div>

@endsection
