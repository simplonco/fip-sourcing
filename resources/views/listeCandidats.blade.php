@extends('layouts.app')

@section('content')

<div class="container">

  <table class="table table-striped">
    <thead>
    <p>Liste de tous les candidats dont la candidature est complète :</p>
      <tr>
        <th>Prénom, Nom</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($candidats as $key => $candidat)
    @if($roles[$key] == 2)
      <tr>
        <td><a href="/candidatDetaille/{{ $candidat->id }}">( i )</a> | {{$candidat->firstName}} {{$candidat->lastName}}</td>
        <td>{{$candidat->email}}</td>
      </tr>
    @endif
    @endforeach
    </tbody>
  </table>
</div>


@endsection
