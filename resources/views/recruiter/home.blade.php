@extends('layouts.app')
@section('content')
    <div class="container">
         <div class="title-top-container">
            <h3 class="text-center title-top">ACCUEIL</h3>
         </div>
          <div class="cardd-container">
            
            <div class="cardd">
               <a href="#">
                  <div class="card text-center text-white bg-danger mb-3">
                     <div class="card-body">
                        <i class="fa fa-question fa-5x"></i>
                        <h3 class="card-title">Questionnaires</h3>
                     </div>
                  </div>
               </a>
            </div>

            <div class="cardd">
               <a href="{{route('recruiterFormations')}}">
                  <div class="card text-center text-white bg-danger mb-3">
                    <div class="card-body navigation-container">
                        <i class="fa fa-file-alt fa-5x"></i>
                        <h3 class="card-title">Formations
                        </h3>
                    </div>
                  </div>
               </a>
            </div>
            
            <div class="cardd">
               <a href="{{route('candidateSearch')}}">
                  <div class="card text-center text-white bg-danger mb-3">
                     <div class="card-body">
                        <i class="fa fa-user fa-5x "></i>
                        <h3 class="card-title">Candidats</h3>
                     </div>
                  </div>
               </a>
            </div>
        </div>
    </div>
@endsection