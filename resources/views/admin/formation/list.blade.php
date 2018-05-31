@extends('layouts.app')

@section('content')

@if(Session::has('flash_message'))
<div class="alert alert-success">
  {{ Session::get('flash_message') }}
</div>
@endif
<div class="container">
   <div class="title-top-container">
      <h3 class='text-center title-top'>
         {{__('formation.list')}}
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
                           <th style="text-align:center;">Actions</th>
                           <th>{{__('formation.choose_formation.name')}}</th>
                           <th>{{__('formation.choose_formation.description')}}</th>
                           <th>{{__('formation.choose_formation.city')}}</th>
                           <th>{{__('formation.choose_formation.year')}}</th>
                           <th>{{__('formation.choose_formation.begin_session')}}</th>
                           <th>{{__('formation.choose_formation.end_session')}}</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($formations as $formation)
                        <tr class="actions">
                              <td class="td-action-buttons  width-actions" style="text-align:center;">
                                 <a href="{{ route('formationShow', $formation->id) }}">
                                    <span class="fa-stack fa-sm">
                                       <i class="fas fa-circle fa-stack-2x"></i>
                                       <i class="fas fa-info fa-stack-1x" aria-hidden="true"></i>
                                    </span>
                                 </a>
                                 <a href="{{ route('formationEdit', $formation->id) }}">
                                    <span class="fa-stack fa-sm">
                                       <i class="fas fa-circle fa-stack-2x"></i>
                                       <i class="fas fa-pencil-alt fa-stack-1x" aria-hidden="true"></i>
                                    </span>
                                 </a>
                                 <a href="{{ route('formationDelete', $formation->id) }}">
                                    <span class="fa-stack fa-sm">
                                       <i class="fas fa-circle fa-stack-2x "></i>
                                       <i class="fas fa-ban fa-stack-1x" aria-hidden="true"></i>
                                    </span>
                                 </a>
                              </td>
                              <td>{{$formation->name}}</td>
                              <td>{{$formation->description}}</td>
                              <td>{{$formation->city}}</td>
                              <td>{{$formation->year}}</td>
                              <td>{{$formation->begin_session}}</td>
                              <td>{{$formation->end_session}}</td>
                           </tr>
                        @endforeach
                     {{-- {{ $candidates->links() }} --}}
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="action-buttons-in-footer">
               <div class="action-button rounded-button">
                  <a class="btn btn-primary" href="{{ route('formationCreate') }}">
                     <i class="fas fa-plus"> </i> 
                     &nbsp;
                     {{__('formation.add')}}
                  </a>
               </div>
            </div> 
         </div>
      </div>
   </div>
</div>

  @endsection
