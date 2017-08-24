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
              <h4>Vos deux dernières formations rémunérées</h4>
              <tr>
                <th style="text-align:center;">Actions</th>
                <th>Nom</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($paidFormations as $paidFormation)
              <tr>
                <td style="text-align:center;">
                  <a href="{{ route('paidFormationShow', $paidFormation->id) }}"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                  <a href="{{ route('paidFormationEdit', $paidFormation->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                  <a href="{{ route('paidFormationDelete', $paidFormation->id) }}"><i class="fa fa fa-ban" aria-hidden="true"></i></a></td>
                  <td>{{$paidFormation->name}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            @if(count($paidFormations) < 2)
            <a href="{{ route('paidFormationCreate') }}" class="btn">Ajouter une formation rémunérée</a>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>


  @endsection
