@extends('layouts.app')
@section('content')
    <div class="container mobile-home-container">
      <div class="title-top-container">
         <h3 class="text-center title-top">ACCUEIL</h3>
      </div>
      <div class="cardd-mega-container">
         <div class="cardd-container">
            <div class="cardd">
              <a href="{{$roleUser === "recruiter" ? '#' : '#' }}">
                  <div class="card text-center text-white bg-danger mb-3">
                     <div class="card-body">
                        <i class="fa fa-question fa-5x"></i>
                        <h3 class="card-title">Questionnaires</h3>
                     </div>
                  </div>
              </a>
            </div>

            <div class="cardd">
              <a href="{{$roleUser === "recruiter" ? route('trainer.courses.index') : route('admin.courses.list') }}">
               @if($roleUser == 'learner')
                  <a href="#">
               @endif
                  <div class="card text-center text-white bg-danger mb-3">
                    <div class="card-body navigation-container">
                        <i class="fa fa-file-alt fa-5x"></i>
                        <h3 class="card-title">
                        {{$roleUser === "recruiter" ? "Formations" : __('admin_panel.trainings') }}
                        </h3>
                    </div>
                  </div>
              </a>
            </div>
            
            <div class="cardd">
               <a href="{{$roleUser === "recruiter" ? route('trainer.courses.applicants.search') : route('admin.users.index') }}"> 

                  <div class="card text-center text-white bg-danger mb-3">
                     <div class="card-body">
                        <i class="fa fa-user fa-5x "></i>
                        <h3 class="card-title">
                          {{$roleUser === "recruiter" ? " Candidats" : __('admin_panel.users') }}
                        </h3>
                     </div>
                  </div>
               </a>
            </div>
         </div>
      </div>
        
   </div>
@endsection