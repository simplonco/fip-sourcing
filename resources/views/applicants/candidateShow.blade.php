@extends('layouts.app')

@section('content')

<div class="container mega-container">

   <div class="title-top-container">
      <div>
         <h3 class="text-center title-top">CANDIDAT - {{$candidate->first_name}} {{$candidate->last_name}}</h3>
         <div class="dp-f jc-c">
            <h5>{{__("Session de formation")}} {!! $formation->name !!}</h5>
         </div>
      </div>
   </div>

  

   <div class="cards-custom-list-mega-container">
      <div class="card-custom-list-container">
         <div class="container cards-custom-list">

               @include('partials.recruiter.formation', ['recruiterFormations' => 'focusCandidate', 'candidate' => $candidate])

               <div class="tabContainer">
                     {{-- <div class="buttonContainer">
                         <button data-index="0" class="tab-button"onclick="showPanel(0)">Info</button>
                         <button data-index="1" class="tab-button"onclick="showPanel(1)">Points</button>
                         <button data-index="2" class="tab-button"onclick="showPanel(2)">Questions</button>
                     </div> --}}
                     <div class="tabPanel" style="display:none">
                        @include('partials.recruiter.formation', ['recruiterFormations' => 'focusCandidateAdmin', 'candidate' => $candidate])            
                     </div>
                     <div class="tabPanel" style="display:none">
                        @include('partials.recruiter.formation', ['recruiterFormations' => 'applicantsResumeEval', 'candidate' => $candidate])
                     </div>
                     <div class="tabPanel" style="display:none"> 
                        @include('partials.recruiter.formation', ['recruiterFormations' => 'questionnaireCandidate', 'candidate' => $candidate])
                     </div>
                 </div>

               @include('partials.recruiter.nextAndPreviousButtons', ['recruiterFormations' => 'focusCandidateAdmin', 'candidate' => $candidate])
         </div>
      </div>
   </div>
</div>

@endsection
