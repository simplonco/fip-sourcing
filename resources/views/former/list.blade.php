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
              <h4>Liste de tous les formateurs</h4>
              <tr>
                <th style="text-align:center;">Actions</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($formateurs as $formateur)
              <tr>
                <td style="text-align:center;">
                  <a href="{{ route('formerShow', $formateur->id) }}" target="_blank"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                  <a href="{{ route('formerEdit', $formateur->id) }}" target="_blank"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                  <a href="{{ route('formerDelete', $formateur->id) }}" target="_blank"><i class="fa fa fa-ban" aria-hidden="true"></i></a></td>
                  <td>{{$formateur->lastName}}</td>
                  <td>{{$formateur->firstName}}</td>
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
