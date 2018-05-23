@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="title-top-container">
         <h3 class="text-center title-top">MES FORMATIONS</h3>
      </div>

      <div class="container cards-custom-list">
         @foreach($trainer->sessions as $session)
            @include('partials.recruiter.formation', ['recruiterFormations' => 'ongoing'])
         @endforeach
      </div>
      <div class="container cards-custom-list">
            @include('partials.recruiter.formation', ['recruiterFormations' => 'new'])
      </div>

      <div class="title-top-container">
         <h3 class="text-center title-top">FORMATIONS À VENIR</h3>
      </div>

      <div class="container cards-custom-list">
         @foreach($trainer->sessions as $session)
            @include('partials.recruiter.formation', ['recruiterFormations' => 'coming'])
         @endforeach
      </div>
   </div>
@endsection