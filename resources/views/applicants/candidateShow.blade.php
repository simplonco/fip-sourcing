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
         <div class="container cards-custom-list tab-applicant-section tab-root">

               @include('partials.recruiter.formation', ['recruiterFormations' => 'focusCandidate', 'candidate' => $candidate])
               <div class="tab-button-container">
                  <button class="tab-button" data-index="0">General</button>
                  <button class="tab-button" data-index="1">Scores</button>
                  <button class="tab-button" data-index="2">Motivation</button>
               </div>
               <div class="tab-container">
                     <div class="tab-panel" style="display:none">
                        @include('partials.applicants.candidateAdministrativeInfo')
                     </div>
                     <div class="tab-panel" style="display:none">
                         @include('partials.applicants.candidateShowScore')
                     </div>
                     <div class="tab-panel" style="display:none">>
                         @include('applicants.candidateShowAnswers')
                     </div>
                 </div>

               @include('partials.recruiter.nextAndPreviousButtons', ['recruiterFormations' => 'focusCandidateAdmin'])
         </div>
      </div>
   </div>
</div>

@endsection
