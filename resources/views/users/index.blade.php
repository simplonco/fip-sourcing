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
         Liste des utilisateurs
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
                              <th >
                                 {{__('user.choose_user.last_name')}}
                                 {{-- <div class="sorting-arrows" style="border-bottom: 0px;">
                                    <a href="#"><i class="fa fa-sort-up" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-sort-down" aria-hidden="true"></i></a>
                                 </div> --}}
                              </th>
                              <th >
                                 {{__('user.choose_user.first_name')}}
                              </th>
                              <th>
                                 {{__('user.choose_user.email')}}
                              </th>
                              <th >
                                 {{__('user.choose_user.role')}}
                              </th>
                              <th >
                                 {{__('user.choose_user.activated')}}
                              </th>
                           </tr>
                     </thead>
                     <tbody>

                     @foreach ($users as $user)
                        <tr class="actions">
                           <td style="text-align:center;" class="td-action-buttons">
                              <a href="{{route('admin.users.edit', $user->id)}}">
                                 <span class="fa-stack fa-sm" style="    vertical-align: middle;">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-pencil-alt fa-stack-1x" aria-hidden="true"></i>
                                 </span>
                              </a>
                              <a href="">
                                 <span class="fa-stack fa-sm" style="    vertical-align: middle;">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-trash fa-stack-1x" aria-hidden="true"></i>
                                 </span>
                              </a>
                     
                           </td>
                           <td>
                              @isset($user->last_name)
                                 {{$user->last_name}}
                              @endisset
                           </td>
                           <td>
                              @isset($user->first_name)
                                 {{$user->first_name}}
                              @endisset
                           </td>
                           <td>
                              @isset($user->email)
                                 {{$user->email}}
                              @endisset
                           </td>
                           <td>
                              @isset($user->roles[0]->name)
                                 {{__('roles.'.$user->roles[0]->name)}}
                              @endisset   
                           </td>
                           <td>
                              {{$user->isActivated()}}
                              {{-- @isset($user->isActivated) --}}
                                 {{-- {{$user->isActivated}} --}}
                              {{-- @endisset    --}}
                           </td>
                        </tr>
                     @endforeach
                  
                     {{-- {{ $candidates->links() }} --}}
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="action-buttons-in-footer">
               <div class="action-button rounded-button">
                  <a class="btn btn-primary" href="{{ route('admin.users.create') }}">
                     <i class="fas fa-plus"> </i> 
                     &nbsp;
                     {{__('admin_panel.new_user')}}
                  </a>
               </div>
            </div> 
         </div>
      </div>
   </div>
</div>

  @endsection
