@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <table class="table table-striped">
            <thead>
              <h4>Liste de tous les candidats dont la candidature est complète :</h4>
              <tr>
                <th style="text-align:center;">Infos</th>
                <th>Prénom Nom</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($candidats as $candidat)
              <tr>
                <td style="text-align:center;"><a href="/candidatDetaille/{{ $candidat->id }}"><i class="fa fa-info-circle" aria-hidden="true"></i></a></td>
                <td>{{$candidat->first_name}} {{$candidat->last_name}}</td>
                <td>{{$candidat->email}}</td>
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
