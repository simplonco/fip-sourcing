@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Liste de vos formations</div>
        <div class="panel-body">

          <table class="table table-striped">
            <thead>
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
