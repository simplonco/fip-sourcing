@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">{{__('formation.formation_show')}}</div>
        <div class="panel-body">

          <div class="row">
            <div class="col-md-3">
              <b>{{__('formation.choose_formation.name')}} :</b>
            </div>
            <div class="col-md-5">
              {{$formation->name}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <b>{{__('formation.choose_formation.description')}} :</b>
            </div>
            <div class="col-md-5">
              {{$formation->description}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <b>{{__('formation.choose_formation.city')}} :</b>
            </div>
            <div class="col-md-5">
              {{$formation->city}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <b>{{__('formation.choose_formation.year')}} :</b>
            </div>
            <div class="col-md-5">
              {{$formation->year}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <b>{{__('formation.choose_formation.begin_session')}} :</b>
            </div>
            <div class="col-md-5">
              {{$formation->begin_session}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <b>{{__('formation.choose_formation.end_session')}} :</b>
            </div>
            <div class="col-md-5">
              {{$formation->end_session}}
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection
