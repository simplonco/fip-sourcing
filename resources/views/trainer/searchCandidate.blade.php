@extends('layouts.app')

@section('content')
   <div class="container container mega-container">
      <div class="title-top-container">
         <h3 class="text-center title-top">RECHERCHER UN CANDIDAT</h3>
      </div>
      <div class="form-group input-centered">
         <form class="navbar-form" role="search">
            <input class="form-control col-md-10" placeholder="exemple Jean DUBOIS" name="" id="srch-term" type="text">
         </form>
      </div>
      <div class="container cards-custom-list">
         <div style="display:flex; justify-content:center;">
            <div style="width:85%;">
               <h5 class="page-title">Résultats de la recherche ({{$candidates->count()}}) :</h5>
            </div>
         </div>
            @foreach($candidates as $candidate)
            <div class="cards-custom-list-mega-container search-candidate">
               <div class="card-custom-list-container">
                  <div class="container cards-custom-list">
                     @include('partials.recruiter.formation', ['recruiterFormations' => 'applicants', "candidate", $candidate])
                  </div>
               </div>
            </div>
         @endforeach
      </div>
   </div>
@endsection
