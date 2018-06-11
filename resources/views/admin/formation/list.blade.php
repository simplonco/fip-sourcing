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
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($formations as $formation)
                        <tr class="actions">
                              <td class="td-action-buttons  width-actions" style="text-align:center;">
                                 <a href="{{ route('admin.courses.show', $formation->id) }}">
                                    <span class="fa-stack fa-sm">
                                       <i class="fas fa-circle fa-stack-2x"></i>
                                       <i class="fas fa-info fa-stack-1x" aria-hidden="true"></i>
                                    </span>
                                 </a>
                                 <a href="{{ route('admin.courses.edit', $formation->id) }}">
                                    <span class="fa-stack fa-sm">
                                       <i class="fas fa-circle fa-stack-2x"></i>
                                       <i class="fas fa-pencil-alt fa-stack-1x" aria-hidden="true"></i>
                                    </span>
                                 </a>
                                 <a href="{{ route('admin.courses.destroy', $formation->id) }}">
                                    <span class="fa-stack fa-sm">
                                       <i class="fas fa-circle fa-stack-2x "></i>
                                       <i class="fas fa-ban fa-stack-1x" aria-hidden="true"></i>
                                    </span>
                                 </a>
                              </td>
                              <td>{{$formation->name}}</td>
                              <td>{{$formation->description}}</td>
                           </tr>
                        @endforeach
                     {{-- {{ $candidates->links() }} --}}
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="action-buttons-in-footer">
               <div class="action-button rounded-button">
                  <a class="btn btn-primary" href="{{ route('admin.courses.create') }}">
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
