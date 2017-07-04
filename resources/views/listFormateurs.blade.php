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
                <th style="text-align:center;">Infos</th>
                <th>Prénom Nom</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($formateurs as $formateur)
              <tr>
                <td style="text-align:center;"><a href="/formateurDetails/{{ $formateur->id }}" target="_blank"><i class="fa fa-info-circle" aria-hidden="true"></i></a></td>
                <td>{{$formateur->firstName}} {{$formateur->lastName}}</td>
                <td>{{$formateur->email}}</td>
              </tr>

              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
