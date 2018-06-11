@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">{{__('formation.list')}}</div>
        <div class="panel-body">

          <table class="table table-striped">
            <thead>
              <tr>
                <th style="text-align:center;">Actions</th>
                <th>{{__('formation.choose_formation.name')}}</th>
                <th>{{__('formation.choose_formation.description')}}</th>
                <th>{{__('formation.choose_formation.city')}}</th>
                <th>{{__('formation.choose_formation.year')}}</th>
                <th>{{__('formation.candidates')}}</th>
              </tr>
            </thead>
            @foreach ($former->sessions as $session)
            <tr>
              <td style="text-align:center;">
                <a href="{{ route('trainer.courses.show', $session->formation->id) }}"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                <a href="{{ route('trainer.courses.edit', $session->formation->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
              <td>{{$session->formation->name}}</td>
              <td>{{$session->formation->description}}</td>
              <td>{{$session->city}}</td>
              <td>{{$session->year}}</td>
              <td style="text-align:center;">
               {{-- <a href="{{ route('recruiterFormationCandidatesList', $session->formation->id) }}">{{__('formation.candidates_list')}}</a> --}}
              </td>
            </tr>
              @endforeach
          </table>

          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection
