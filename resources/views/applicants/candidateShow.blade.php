@extends('layouts.app')

@section('content')

<div class="container mega-container">

   <div class="title-top-container">
      <h3 class="text-center title-top">CANDIDAT - {{$candidate->first_name}} {{$candidate->last_name}}</h3>
   </div>
   <div class="cards-custom-list-mega-container">
      <div class="card-custom-list-container">
         <div class="container cards-custom-list">
               @include('partials.recruiter.formation', ['recruiterFormations' => 'focusCandidate', 'candidate' => $candidate])
               @include('partials.recruiter.formation', ['recruiterFormations' => 'focusCandidateAdmin', 'candidate' => $candidate])
               @include('partials.recruiter.formation', ['recruiterFormations' => 'applicantsResumeEval', 'candidate' => $candidate])
               @include('partials.recruiter.formation', ['recruiterFormations' => 'questionnaireCandidate', 'candidate' => $candidate])
               
               @include('partials.recruiter.nextAndPreviousButtons', ['recruiterFormations' => 'focusCandidateAdmin', 'candidate' => $candidate])
         </div>
      </div>
   </div>
</div>

@endsection
