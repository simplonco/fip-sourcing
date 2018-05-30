@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="title-top-container">
         <h3 class="text-center title-top">ACCUEIL</h3>
      </div>
      <div class="cardd-mega-container">
         <div class="cardd-container">
            <div class="cardd">
               @if($role == 'recruiter')
                  <a href="#">
               @elseif($role == 'admin')
                  <a href="#">
               @endif
                  <div class="card text-center text-white bg-danger mb-3">
                     <div class="card-body">
                        <i class="fa fa-question fa-5x"></i>
                        <h3 class="card-title">Questionnaires</h3>
                     </div>
                  </div>
               </a>
            </div>

            <div class="cardd">
               @if($role == 'recruiter')
                  <a href="{{route('recruiterFormations')}}">
               @elseif($role == 'admin')
                  <a href="{{ route('formationList') }}">
               @endif
                  <div class="card text-center text-white bg-danger mb-3">
                    <div class="card-body navigation-container">
                        <i class="fa fa-file-alt fa-5x"></i>
                        <h3 class="card-title">
                           @if($role == 'recruiter')   
                              Formations
                           @elseif ($role == 'admin')
                              {{__('admin_panel.trainings')}}
                           @endif
                        </h3>
                    </div>
                  </div>
               </a>
            </div>
            
            <div class="cardd">
               @if($role == 'recruiter')
                  <a href="{{route('candidateSearch')}}">
               @elseif($role=='admin')
                  <a href="{{route('showUsers')}}">
               @endif
                  <div class="card text-center text-white bg-danger mb-3">
                     <div class="card-body">
                        <i class="fa fa-user fa-5x "></i>
                        <h3 class="card-title">
                           @if($role == 'recruiter')
                              Candidats
                           @elseif($role=='admin')
                              {{__('admin_panel.users')}}
                           @endif
                        </h3>
                     </div>
                  </div>
               </a>
            </div>
         </div>
      </div>
        
   </div>
@endsection