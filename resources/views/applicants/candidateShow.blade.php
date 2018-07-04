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
         <div class="container cards-custom-list tab-applicant-section">

               @include('partials.recruiter.formation', ['recruiterFormations' => 'focusCandidate', 'candidate' => $candidate])
               <div class="tab-button-container">
                  <button class="tab-button" data-index="0">General</button>
                  <button class="tab-button" data-index="1">Scores</button>
                  <button class="tab-button" data-index="2">Motivation</button>
               </div>
               <div class="tab-container">
                     <div class="tab-panel" style="display:none">
                        {{--@include('partials.recruiter.formation', ['recruiterFormations' => 'focusCandidateAdmin', 'candidate' => $candidate])--}}
                        @include('partials.applicants.candidateAdministrativeInfo', ['candidate' => $candidate] )
                     </div>
                     <div class="tab-panel" style="display:none">
                       {{--@include('partials.recruiter.formation', ['recruiterFormations' => 'applicantsResumeEval', 'candidate' => $candidate])--}}
                         @include('partials.applicants.candidateShowScore', ['candidate' => $candidate, 'questions'=>$questions])
                     </div>
                     <div class="tab-panel" style="display:none">
                       {{-- @include('partials.recruiter.formation', ['recruiterFormations' => 'questionnaireCandidate', 'candidate' => $candidate, 'questions'=>$questions])--}}
                         @include('applicants.candidateShowAnswers', ['candidate' => $candidate,'questions'=>$questions,'recruiter'=>$recruiter, 'evaluableQuestions'=>$evaluableQuestions])
                     </div>
                 </div>

               @include('partials.recruiter.nextAndPreviousButtons', ['recruiterFormations' => 'focusCandidateAdmin', 'candidate' => $candidate])
         </div>
      </div>
   </div>
</div>

@endsection
