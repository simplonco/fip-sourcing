@extends('layouts.app')

@section('content')

@if(Session::has('flash_message'))
<div class="alert alert-success">
  {{ Session::get('flash_message') }}
</div>
@endif

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Tableau d'administration</div>
        <div class="panel-body">
          <a href="{{ route('formerList') }}" class="btn">Gérer les formateurs</a>
          <a href="{{ route('formationList') }}" class="btn">Gérer les formations</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
