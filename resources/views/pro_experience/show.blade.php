@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Informations de l'expérience professionnelle'</div>
        <div class="panel-body">

          <div class="row">
            <div class="col-md-3">
              <b>Nom de l'entreprise</b>
            </div>
            <div class="col-md-5">
              {{$pro_experience->society_name}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <b>Adresse de l'entreprise</b>
            </div>
            <div class="col-md-5">
              {{$pro_experience->society_address}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <b>Type de contrat</b>
            </div>
            <div class="col-md-5">
              {{$pro_experience->contract_type}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <b>Durée du contrat</b>
            </div>
            <div class="col-md-5">
              {{$pro_experience->contract_duration}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <b>Poste occupé</b>
            </div>
            <div class="col-md-5">
              {{$pro_experience->position_held}}
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection
