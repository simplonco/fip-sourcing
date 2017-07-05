@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">

          <table class="table table-striped">
            <thead>
              <h4>Liste de tous les formateurs</h4>
              <tr>
                <th style="text-align:center;">Actions</th>
                <th>Prénom Nom</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($formateurs as $formateur)
              <tr>
                <td style="text-align:center;">
                  <a href="/formerShow/{{ $formateur->id }}" target="_blank"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                  <a href="/formerUpdate/{{ $formateur->id }}" target="_blank"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                  <a href="/formerDelete/{{ $formateur->id }}" target="_blank"><i class="fa fa fa-ban" aria-hidden="true"></i></a></td>
                  <td>{{$formateur->firstName}} {{$formateur->lastName}}</td>
                  <td>{{$formateur->email}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <a href="{{ route('formerCreate') }}" class="btn">Ajouter un formateur</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  @endsection
