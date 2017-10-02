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
    <div class="panel-heading">{{__('candidate_panel.formation')}}</div>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>{{__('formation.choose_formation.name')}}</th>
          <th>{{__('formation.choose_formation.description')}}</th>
          <th>{{__('formation.choose_formation.city')}}</th>
          <th>{{__('formation.choose_formation.year')}}</th>
          <th>{{__('formation.choose_formation.begin_session')}}</th>
          <th>{{__('formation.choose_formation.end_session')}}</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($formations as $formation)
        <tr>
            <td>{{$formation->name}}</td>
            <td>{{$formation->description}}</td>
            <td>{{$formation->city}}</td>
            <td>{{$formation->year}}</td>
            <td>{{$formation->begin_session}}</td>
            <td>{{$formation->end_session}}</td>
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
