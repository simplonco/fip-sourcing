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
                <a href="{{ route('chooseCivil') }}" class="btn">Etat civil</a>
            </div>
            <div class="row">
              <div class="col-md-4">
                <a href="{{ route('chooseHero') }}" class="btn">Super-héros</a>
              </div>
              <div class="col-md-4">
                <a href="{{ route('chooseHack') }}" class="btn">Hack</a>
              </div>
              <div class="col-md-4">
                <a href="{{ route('chooseCourse') }}" class="btn">Votre parcours</a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <a href="{{ route('chooseSuperpower') }}" class="btn">Super-pouvoirs</a>
              </div>
              <div class="col-md-4">
                <a href="{{ route('chooseMotivation') }}" class="btn">Simplon et vous</a>
              </div>
              <div class="col-md-4">
                <a href="{{ route('chooseProfile') }}" class="btn">Profils</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection
