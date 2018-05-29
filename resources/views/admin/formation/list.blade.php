@extends('layouts.app')

@section('content')

@if(Session::has('flash_message'))
<div class="alert alert-success">
  {{ Session::get('flash_message') }}
</div>
@endif
<div class="description-view-mega-container">
<table class="table table-striped">
      <thead>
            <tr>
               <th style="text-align:center;">Actions</th>
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
            <td style="text-align:center;">
              <a href="{{ route('formationShow', $formation->id) }}"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
              <a href="{{ route('formationEdit', $formation->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
              <a href="{{ route('formationDelete', $formation->id) }}"><i class="fa fa fa-ban" aria-hidden="true"></i></a></td>
              <td>{{$formation->name}}</td>
              <td>{{$formation->description}}</td>
              <td>{{$formation->city}}</td>
              <td>{{$formation->year}}</td>
              <td>{{$formation->begin_session}}</td>
              <td>{{$formation->end_session}}</td>
            </tr>
      @endforeach
     
      {{-- {{ $candidates->links() }} --}}
      </tbody>
  </table>
  <a href="{{ route('formationCreate') }}" class="btn">{{__('formation.add')}}</a>
</div>

{{--   
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">

          <table class="table table-striped">
            <thead>
              <h4>{{__('formation.list')}}</h4>
              <tr>
                <th style="text-align:center;">Actions</th>
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
                <td style="text-align:center;">
                  <a href="{{ route('formationShow', $formation->id) }}"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                  <a href="{{ route('formationEdit', $formation->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                  <a href="{{ route('formationDelete', $formation->id) }}"><i class="fa fa fa-ban" aria-hidden="true"></i></a></td>
                  <td>{{$formation->name}}</td>
                  <td>{{$formation->description}}</td>
                  <td>{{$formation->city}}</td>
                  <td>{{$formation->year}}</td>
                  <td>{{$formation->begin_session}}</td>
                  <td>{{$formation->end_session}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <a href="{{ route('formationCreate') }}" class="btn">{{__('formation.add')}}</a>
          </div>
        </div>
      </div>
    </div>
  </div> --}}


  @endsection
