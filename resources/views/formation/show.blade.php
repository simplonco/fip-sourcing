@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Informations de la formation</div>
        <div class="panel-body">
          <div>
            {{$formation->name}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
