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
                                          <th style="text-align:center;">
                                             {{__('user.choose_user.last_name')}}
                                             {{-- <div class="sorting-arrows" style="border-bottom: 0px;">
                                                <a href="#"><i class="fa fa-sort-up" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-sort-down" aria-hidden="true"></i></a>
                                             </div> --}}
                                          </th>
                                          
                                          <th style="text-align:center;">
                                             {{__('user.choose_user.first_name')}}
                                             {{-- <div class="sorting-arrows"  style="border-bottom: 0px;">
                                                <a href="#"><i class="fa fa-sort-up" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-sort-down" aria-hidden="true"></i></a>
                                             </div> --}}
                                          </th>
                                          <th style="text-align:center;">Rôle</th>
                                          <th style="text-align:center;">Activé</th>
                                       </tr>
                                 </thead>
                                 <tbody>
         
                                 @foreach ($users as $user)
                                 <tr>
                                    <td style="text-align:center;">
                                    <a href="{{route('editUser', $user->id)}}"><i class="fas fa-pencil-alt" aria-hidden="true"></i></a>
                                       <a href=""><i class="fas fa-trash" aria-hidden="true"></i></a></td>
                                    <td style="text-align:center;">{{$user->last_name}}</td>
                                    <td style="text-align:center;">{{$user->first_name}}</td>
                                    <td style="text-align:center;">{{ucfirst($user->roles[0]->name)}}</td>
                                    <td style="text-align:center;"></td>
                                    </tr>
                                 @endforeach
                              
                                 {{-- {{ $candidates->links() }} --}}
                                 </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="action-buttons-in-footer">
                        <div class="action-button rounded-button">
                           <a class="btn btn-primary" href="{{ route('createUser') }}">
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
