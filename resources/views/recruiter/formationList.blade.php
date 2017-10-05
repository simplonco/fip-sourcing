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
            @foreach ($former->formations as $formation)
            <tr>
              <td style="text-align:center;">
                <a href="{{ route('recruiterFormationShow', $formation->id) }}"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                <a href="{{ route('recruiterFormationEdit', $formation->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                <td>{{$formation->name}}</td>
                <td>{{$formation->description}}</td>
                <td>{{$formation->city}}</td>
                <td>{{$formation->year}}</td>
                <td style="text-align:center;">
                  <a href="{{ route('recruiterFormationCandidatesShow', $formation->id) }}">{{__('formation.candidates_list')}}</a>
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
