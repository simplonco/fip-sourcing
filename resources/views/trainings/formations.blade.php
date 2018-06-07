@extends('layouts.app')

@section('content')
   <div class="container mega-container">
      <div class="title-top-container">
         <h3 class="text-center title-top">MES FORMATIONS</h3>
      </div>

      <div class="cards-custom-list-mega-container">
         <div class="card-custom-list-container">
            <div class="container cards-custom-list">
               @foreach($trainer->sessions as $session)
                  @include('partials.recruiter.formation', ['recruiterFormations' => 'ongoing'])
               @endforeach
            </div>
            <div class="container cards-custom-list">
                  @include('partials.recruiter.formation', ['recruiterFormations' => 'new'])
            </div>
         </div>
      </div>
         

      <div class="title-top-container">
         <h3 class="text-center title-top">FORMATIONS À VENIR</h3>
      </div>

      <div class="cards-custom-list-mega-container">
         <div class="card-custom-list-container">
            <div class="container cards-custom-list">
               @foreach($trainer->sessions as $session)
                  @include('partials.recruiter.formation', ['recruiterFormations' => 'coming'])
               @endforeach
            </div>
         </div>
      </div>
      
   </div>
@endsection