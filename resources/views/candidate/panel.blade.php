@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Processus d'inscription
          @if (Auth::user()->formations()->first())
          pour la formation {{Auth::user()->formations()->first()->name}}
          @endif</div>
          <div class="panel-body">
            <div class="row">
              <a href="{{ route('chooseFormation') }}" class="btn">Choisir une formation</a>
            </div>
            <div class="row">
              <a href="{{ route('chooseCivil') }}" class="btn">Etat civil</a>
            </div>
            <div class="row">
              <a href="{{ route('chooseHero') }}" class="btn">Super-héros</a>
                <a href="{{ route('chooseExperience') }}" class="btn">Expérience</a>
              <a href="{{ route('chooseHack') }}" class="btn">Hack</a>
              <a href="{{ route('chooseCourse') }}" class="btn">Votre parcours</a>
            </div>
            <div class="row">
              <a href="{{ route('chooseSuperpower') }}" class="btn">Super-pouvoirs</a>
              <a href="{{ route('chooseMotivation') }}" class="btn">Simplon et vous</a>
              <a href="{{ route('chooseProfile') }}" class="btn">Profils</a>
            </div>
          </div>
        </div>
      </div>
      @if (Auth::user()->codecademy_badges)
      <div class="col-md-2 panel">
        <div class="card">
          <div class="card-block">
            <h3 class="panel-heading">Badges Codecademy</h3>
            <p class="panel-body h3">{{Auth::user()->codecademy_badges}}</p>
            <a href="{{ route('refreshBadges') }}" class="btn btn-primary">Actualiser</a>
          </div>
        </div>
      </div>
      @endif
    </div>
  </div>

  @endsection
