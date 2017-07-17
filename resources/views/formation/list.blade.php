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
        <div class="panel-body">

          <table class="table table-striped">
            <thead>
              <h4>Liste de tous les formations</h4>
              <tr>
                <th style="text-align:center;">Actions</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Ville</th>
                <th>Année</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($formations as $formation)
              <tr>
                <td style="text-align:center;">
                  <a href="{{ route('formationShow', $formation->id) }}" target="_blank"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                  <a href="{{ route('formationEdit', $formation->id) }}" target="_blank"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                  <a href="{{ route('formationDelete', $formation->id) }}" target="_blank"><i class="fa fa fa-ban" aria-hidden="true"></i></a></td>
                  <td>{{$formation->name}}</td>
                  <td>{{$formation->description}}</td>
                  <td>{{$formation->city}}</td>
                  <td>{{$formation->year}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <a href="{{ route('formationCreate') }}" class="btn">Ajouter une formation</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  @endsection
