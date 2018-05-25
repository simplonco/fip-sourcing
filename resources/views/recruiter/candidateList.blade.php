@extends('layouts.app')

@section('content')
    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif

   <div class="container">

      <div class="title-top-container">
         <h3 class="text-center title-top">{{$session->formation->name}} du {{$session->begin_session->format('d/m/y')}} au {{$session->end_session->format('d/m/y')}} à {{$session->city}}</h3>
      </div>
      <div class="container cards-custom-list">
         <div class="card-custom-container-aligt-right">
            <form class="" action="">
               <div class="">
                  <label for="checkbox1">
                     <input type="checkbox"/>
                     Afficher les candidatures en cours()
                  </label>
               </div>
            </form>
         </div>
      </div>

      <div class="cards-custom-list-mega-container">
         <div class="card-custom-list-container">
            <div class="container cards-custom-list">
               @include('partials.recruiter.formation', ['recruiterFormations' => 'applicantsList'])
            </div>
         </div>
      </div>
      <div class="action-buttons-container">
            <div class="action-button rounded-button">
                  <a href="{{ route('recruiterIndex') }}" class="btn btn-primary">Retour</a>
            </div>
            <div class="action-button rounded-button">
                  <a href="#{{--lien vers page de tri --}}" class="btn btn-primary">Trier</a>
            </div>
            <div class="action-button rounded-button">
                  <a href="#{{-- permet de clore les candidatures pour cette session --}}" class="btn btn-primary">Clore</a>
            </div>
         </div>
      </div>

   

@endsection
