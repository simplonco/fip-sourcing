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
                        <div class="">
                           <dt>{{__('formation.choose_formation.name')}} :</dt><dd>{!! $formation->name !!}</dd>
                           <br>
                           <dt>{{__('formation.choose_formation.description')}}</dt><dd> {{$formation->description}}</dd>
                        </div>
                        
                     </dl>
                  </div>
               </div>
            </div>
            <div class="action-buttons-in-footer">
               <div class="action-button rounded-button">
                  <a href="{{route('sessionCreate', $formation->id)}}" class="btn btn-primary">
                     {{__('formation.create_session')}}
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="title-top-container">
      <h3 class='text-center title-top'>
         {{__('Sessions')}}
      </h3>
   </div>

   <div class="cards-custom-list-mega-container">
      <div class="card-custom-list-container">
         <div class="container cards-custom-list">
            <div class="card-custom-container">
               <div class="description-view-mega-container">
                  <table class="table table-striped">
                     <thead>
                        <tr>
                           <th style="text-align:center;">
                              Actions
                           </th>
                           <th>
                                 {{__('formation.choose_formation.city')}}
                           </th>
                           <th>
                                 {{__('formation.choose_formation.year')}}
                           </th>
                           <th>
                                 {{__('formation.choose_formation.begin_session')}}
                           </th>
                           <th>
                                 {{__('formation.choose_formation.end_session')}}
                           </th>
                           <th>
                              {{__('formation.choose_formation.status')}}
                           </th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($formation->sessions as $session)
                        <tr class="actions">
                           <td style="text-align:center" class="td-action-buttons">
                              <a href="{{route('sessionEdit', $session->id)}}">
                              <span class="fa-stack fa-sm" style="    vertical-align: middle;">
                                 <i class="fas fa-circle fa-stack-2x"></i>
                                 <i class="fas fa-pencil-alt fa-stack-1x" aria-hidden="true"></i>
                              </span>
                              </a>
                              <a href="#">
                                 <span class="fa-stack fa-sm" style="    vertical-align: middle;">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-trash fa-stack-1x" aria-hidden="true"></i>
                                 </span>
                              </a>
                           </td>
                           <td>{{$session->city}}</td>
                           <td>{{$session->year}}</td>
                           <td>{{$session->begin_session->format("d-m-Y")}}</td>
                           <td>{{$session->end_session->format("d-m-Y")}}</td>
                           <td>
                              @if($session->begin_session->lt($today) && $session->end_session->gt($today))
                                 <i class="fas fa-dot-circle" color="lightgreen"></i>   
                                 {{__('En cours')}}
                              @endif

                           @if($session->begin_session->gt($today))
                                 <i class="fas fa-dot-circle" color="lightblue"></i>   
                                 {{__('À venir')}}
                                 @endif

                              @if($session->end_session->lt($today))
                                 <i class="fas fa-dot-circle" color="red"></i>   
                                 {{__('Cloturée')}}
                              @endif
                           </td>
                        </tr>
                        @endforeach
                     </tbody>

                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection
