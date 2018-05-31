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
      </div>
   </div>
</div>

{{-- 
<div class="container">

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">{{__('formation.show')}}</div>
        <div class="panel-body">

          <div class="row">
            <div class="col-md-3">
              <b>{{__('formation.choose_formation.name')}} :</b>
            </div>
            <div class="col-md-5">
              {{$formation->name}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <b>{{__('formation.choose_formation.description')}} :</b>
            </div>
            <div class="col-md-5">
              {{$formation->description}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <b>{{__('formation.choose_formation.city')}} :</b>
            </div>
            <div class="col-md-5">
              {{$formation->city}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <b>{{__('formation.choose_formation.year')}} :</b>
            </div>
            <div class="col-md-5">
              {{$formation->year}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <b>{{__('formation.choose_formation.begin_session')}} :</b>
            </div>
            <div class="col-md-5">
              {{$formation->begin_session}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <b>{{__('formation.choose_formation.end_session')}} :</b>
            </div>
            <div class="col-md-5">
              {{$formation->end_session}}
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div> --}}

@endsection
