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
      <div class="cards-custom-list-mega-container">
         <div class="card-custom-list-container">
            <div class="container cards-custom-list">
                  <div class="action-buttons-container header-action-buttons">
                     <label for="checkbox1">
                        <input type="checkbox"/>
                        Afficher les candidatures en cours()
                     </label>
                  </div>
               @include('partials.recruiter.formation', ['recruiterFormations' => 'applicantsList'])
                <div class="action-buttons-in-footer">
                   <div class="action-button rounded-button">
                      <a href="{{ route('recruiterIndex') }}" class="btn btn-primary"><i class="fas fa-caret-left fa-fw"></i> Retour</a>
                   </div>
                   <div class="action-button rounded-button">
                      <a href="#{{--lien vers page de tri --}}" class="btn btn-primary"><i class="fas fa-bars fa-fw"></i> Trier</a>
                   </div>
                   <div class="action-button rounded-button">
                      <a href="#{{-- permet de clore les candidatures pour cette session --}}" class="btn btn-primary"><i class="fas fa-times fa-fw"></i>   Clore</a>
                   </div>
                </div>
            </div>
            
         </div>
      </div>
   </div>

@endsection
