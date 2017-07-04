@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Tableau d'administration</div>
        <div class="panel-body">
          <a href="{{ route('addFormateur') }}" class="btn">Ajouter un formateur</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
