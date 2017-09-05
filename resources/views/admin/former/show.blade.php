@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Informations du formateur</div>
        <div class="panel-body">

          <div class="row">
            <div class="col-md-3">
              <b>Prénom :</b>
            </div>
            <div class="col-md-3">
              {{$former->first_name}}
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <b>Nom :</b>
            </div>
            <div class="col-md-3">
              {{$former->last_name}}
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <b>Formations :</b>
            </div>
            @foreach ($former->formations() as $formation)
            <div class="col-md-3">
            {{$formation->name}}
            </div>
            @endforeach
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection
