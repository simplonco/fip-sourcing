@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Informations de la formation</div>
        <div class="panel-body">

          <div class="row">
            <div class="col-md-3">
              <b>Nom :</b>
            </div>
            <div class="col-md-5">
              {{$formation->name}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <b>Description :</b>
            </div>
            <div class="col-md-5">
              {{$formation->description}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <b>Ville :</b>
            </div>
            <div class="col-md-5">
              {{$formation->city}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <b>Année :</b>
            </div>
            <div class="col-md-5">
              {{$formation->year}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <b>Début de la session d'inscription :</b>
            </div>
            <div class="col-md-5">
              {{$formation->begin_session}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <b>Fin de la session d'inscription :</b>
            </div>
            <div class="col-md-5">
              {{$formation->end_session}}
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection
