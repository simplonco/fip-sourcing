@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">{{__('former.former_show')}}</div>
        <div class="panel-body">

          <div class="row">
            <div class="col-md-3">
              <b>{{__('user.choose_user.first_name')}} :</b>
            </div>
            <div class="col-md-3">
              {{$former->first_name}}
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <b>{{__('user.choose_user.last_name')}} :</b>
            </div>
            <div class="col-md-3">
              {{$former->last_name}}
            </div>
          </div>

          <table class="table table-striped">
            <thead>
              <h4>{{__('user.choose_user.formations')}}</h4>
              <tr>
                <th>{{__('formation.choose_formation.name')}}</th>
                <th>{{__('formation.choose_formation.description')}}</th>
                <th>{{__('formation.choose_formation.city')}}</th>
                <th>{{__('formation.choose_formation.year')}}</th>
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
