@extends('layouts.app')

@section('content')

<div class="container">

   <div class="title-top-container">
      <h3 class='text-center title-top'>
         {{__('admin_panel.new_user')}}
      </h3>
   </div>
   {{-- {{dd($user)}} --}}
   <div class="cards-custom-list-mega-container">
      <div class="card-custom-list-container">
         <div class="container cards-custom-list">
            <div class="card-custom-container">
               <div class="description-view-mega-container">
                  <div class="card-custom-description">

                     <form role="form" method="POST" action="{{route('saveUser', $user->id)}}">
                           {{ csrf_field() }}
   
                        <div class="form-group">
                           <label for="" class="control-label">Activé</label>
                           <input type="checkbox">
                        </div>
                        <div class="form-group">
                           <label for="role_id" class="control-label">Rôle</label>
                           <select class="form-control" name="" id="">
                              @foreach(\App\Models\Role::all() as $role)
                                 <option value={{$role->id}}>
                                    {{ucfirst($role->name)}}
                                 </option>
                              @endforeach
                           </select>
                        </div>
                        @if($action === "edit")
                           <input value="{{$user->id}}" name="id" type="text" hidden>
                        @endif
                        <div class="form-group">
                           <label for="end_session" class="control-label">{{ __('user.choose_user.last_name')}}</label>
                           <input class="form-control" type="text" name="last_name" 
                           @if($action === "edit")
                              value="{{$user->last_name}}"
                           @endif
                           >
                        </div>
                        <div class="form-group">
                           <label for="city" class="control-label">{{__('user.choose_user.first_name')}}</label>
                           <input class="form-control" type="text" name="first_name"
                           @if($action === "edit")
                              value="{{$user->first_name}}"
                           @endif
                           >
                        </div>
                        <div class="form-group">
                           <label for="city" class="control-label">{{ __('user.choose_user.email')}}</label>
                           <input class="form-control" type="mail" name="email"
                           @if($action === "edit")
                              value="{{$user->email}}"
                           @endif
                           >
                        </div>

                  </div>

               </div>
            </div>
                  <div class="action-buttons-in-footer">
                     <div class="action-button rounded-button">
                        <button href="{{route('showUsers')}}" class=" btn btn-primary">
                           <i class="fas fa-chevron-left"></i> &nbsp;
                           {{__("actions.back")}}
                        </button>
                     </div>
                     <div class="action-button rounded-button">
                        <button class="btn btn-primary" type="submit">
                           <i class="fas fa-plus"></i> &nbsp;
                           {{__("actions.save")}}
                        </button>
                     </div>
                  </div> 
               </form>
                  
         </div>
      </div>
   </div>

</div>
@endsection
