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
          
          <table class="table table-striped">
            <thead>
              <h4>Formations</h4>
              <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Ville</th>
                <th>Année</th>
              </tr>
            </thead>
            @foreach ($former->formations as $formation)
            <tr>
              <td>{{$formation->name}}</td>
              <td>{{$formation->description}}</td>
              <td>{{$formation->city}}</td>
              <td>{{$formation->year}}</td>
            </tr>
            @endforeach
          </table>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection
