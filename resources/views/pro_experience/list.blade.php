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
              <h4>Vos deux dernières expériences professionnelles</h4>
              <tr>
                <th style="text-align:center;">Actions</th>
                <th>Entreprise</th>
                <th>Poste</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($proExperiences as $proExperience)
              <tr>
                <td style="text-align:center;">
                  <a href="{{ route('proExperienceShow', $proExperience->id) }}"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                  <a href="{{ route('proExperienceEdit', $proExperience->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                  <a href="{{ route('proExperienceDelete', $proExperience->id) }}"><i class="fa fa fa-ban" aria-hidden="true"></i></a></td>
                  <td>{{$proExperience->society_name}}</td>
                  <td>{{$proExperience->position_held}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            @if(count($proExperiences) < 3)
            <a href="{{ route('proExperienceCreate') }}" class="btn">Ajouter une expérience professionnelle</a>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>


  @endsection
