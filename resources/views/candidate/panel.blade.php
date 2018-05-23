@extends('layouts.app')

@section('content')
  @if(Session::has('flash_message'))
  <div class="alert alert-success">
    {{ Session::get('flash_message') }}
  </div>
  @endif
  <div class="container">
    <div class="panel panel-default">
      <div id="app-candidat"></div>
    </div>
  </div>
@endsection
