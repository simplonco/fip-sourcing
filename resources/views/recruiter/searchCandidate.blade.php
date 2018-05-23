@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="title-top-container">
         <h3 class="text-center title-top">RECHERCHER UN CANDIDAT</h3>
      </div>
      <div class="form-group input-centered">
            <form class="navbar-form" role="search">
               <input class="form-control col-md-10" placeholder="exemple Jean DUBOIS" name="" id="srch-term" type="text">
            </form>
      </div>
      <div class="container cards-custom-list">
         <h5 class="page-title">Résultats de la recherche ({{$candidates->count()}}) :</h5>
         @foreach($candidates as $candidate)
            @include('partials.recruiter.formation', ['recruiterFormations' => 'applicants', "candidate", $candidate])
         @endforeach
      </div>
   </div>
@endsection