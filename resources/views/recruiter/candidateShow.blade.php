@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <h3 class="text-center">CANDIDAT - {{$candidate->first_name}} {{$candidate->last_name}} </h3>
    <div class="col-md-8 col-md-offset-2">
        @include('partials.recruiter.candidateSummary')
        @include('partials.recruiter.candidateAdministrativeInfo')
        @include('partials.recruiter.nextAndPreviousButtons')
    </div>


  </div>
</div>

@endsection
