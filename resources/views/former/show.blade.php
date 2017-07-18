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
              {{$former->firstName}}
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <b>Nom :</b>
            </div>
            <div class="col-md-3">
              {{$former->lastName}}
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <b>Formation :</b>
            </div>
            <div class="col-md-3">
            {{$former->formations()->first()->name}}
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection
