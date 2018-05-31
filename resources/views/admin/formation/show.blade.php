@extends('layouts.app')

@section('content')

<div class="container">
   <div class="title-top-container">
      <h3 class='text-center title-top'>
         {{__('formation.show')}}
      </h3>
   </div>
   
   <div class="cards-custom-list-mega-container">
      <div class="card-custom-list-container">
         <div class="container cards-custom-list">
            <div class="card-custom-container">
               <div class="description-view-mega-container">
                  <div class="card-custom-description">
                     <dl>
                        <div class="col-md-9">
                           <dt>{{__('formation.choose_formation.name')}} :</dt><dd>{{$formation->name}}</dd>
                           <br>
                           <dt>{{__('formation.choose_formation.description')}}</dt><dd> {{$formation->description}}</dd>
                           <a href="#" class="btn btn-primary">Créer une session</a>
                        </div>
                        <div class="col-md-3">
                           <dt>{{__('formation.choose_formation.city')}} :</dt><dd> {{$formation->city}}</dd>
                           <dt>{{__('formation.choose_formation.year')}} :</dt><dd>{{$formation->year}}</dd>
                           <dt>{{__('formation.choose_formation.begin_session')}} :</dt><dd>{{$formation->begin_session}}</dd>
                           <dt>{{__('formation.choose_formation.end_session')}} :</dt><dd>{{$formation->end_session}}</dd>
                        </div>
                     </dl>
                  </div>
               </div>
            </div>
         </div>
         <h3>{{__('Session en cours')}}</h3>
      @foreach($formation->sessions as $session)

         @if($session->begin_session->lte($today))
               <div class="container cards-custom-list">
                  <div class="card-custom-container">
                     <div class="description-view-mega-container">

                     <div class="card-custom-description">
                        <dl>
                              <dt>{{__('formation.choose_formation.city')}} :</dt><dd> {{$session->city}}</dd>
                              <dt>{{__('formation.choose_formation.year')}} :</dt><dd>{{$session->year}}</dd>
                              <dt>{{__('formation.choose_formation.begin_session')}} :</dt><dd>{{$session->begin_session}}</dd>
                              <dt>{{__('formation.choose_formation.end_session')}} :</dt><dd>{{$session->end_session}}</dd>
                        </dl>
                     </div>
                  </div>
               </div>
            </div>
         @endif
         <h3>Session à venir</h3>
            @if($session->begin_session->gt($today))
               <div class="container cards-custom-list">
                  <div class="card-custom-container">
                     <div class="description-view-mega-container">

                        <div class="card-custom-description">
                           <dl>
                              <dt>{{__('formation.choose_formation.city')}} :</dt><dd> {{$session->city}}</dd>
                              <dt>{{__('formation.choose_formation.year')}} :</dt><dd>{{$session->year}}</dd>
                              <dt>{{__('formation.choose_formation.begin_session')}} :</dt><dd>{{$session->begin_session}}</dd>
                              <dt>{{__('formation.choose_formation.end_session')}} :</dt><dd>{{$session->end_session}}</dd>
                           </dl>
                        </div>
                     </div>
                  </div>
               </div>
            @endif
         @endforeach
      </div>
   </div>
</div>

@endsection
