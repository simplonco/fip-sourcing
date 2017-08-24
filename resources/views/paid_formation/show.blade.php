@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Informations de la formation rémunérée</div>
        <div class="panel-body">

          <div class="row">
            <div class="col-md-3">
              <b>Intitulé de la formation</b>
            </div>
            <div class="col-md-5">
              {{$paid_formation->name}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <b>Date de début</b>
            </div>
            <div class="col-md-5">
              {{$paid_formation->begin_date}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <b>Date de fin</b>
            </div>
            <div class="col-md-5">
              {{$paid_formation->end_date}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <b>Coordonnées du centre de formation</b>
            </div>
            <div class="col-md-5">
              {{$paid_formation->contact}}
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection
