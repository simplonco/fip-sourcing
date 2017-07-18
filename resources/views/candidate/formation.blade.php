@extends('layouts.app')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
  @foreach($errors->all() as $error)
  <p>{{ $error }}</p>
  @endforeach
</div>
@endif

<div class="col-sm-offset-3 col-sm-6">
  <div class="panel panel-info">
    <div class="panel-heading">Choix d'une formation</div>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Description</th>
          <th>Ville</th>
          <th>Année</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($formations as $formation)
        <tr>
            <td>{{$formation->name}}</td>
            <td>{{$formation->description}}</td>
            <td>{{$formation->city}}</td>
            <td>{{$formation->year}}</td>
            <td style="text-align:center;">
              <a href="{{ route('storeFormation', $formation->id) }}" class="btn">Sélectionner</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      </div>
    </div>
  </div>

  @endsection
