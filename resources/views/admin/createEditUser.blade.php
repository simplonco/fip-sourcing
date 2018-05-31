@extends('layouts.app')

@section('content')

<div class="container">

   <div class="title-top-container">
      <h3 class='text-center title-top'>
         @if($action === "edit")
         {{__('admin_panel.edit_user')}}

         @elseif($action === "create")
         {{__('admin_panel.new_user')}}
         @endif
      </h3>
   </div>

   <div class="cards-custom-list-mega-container">
      <div class="card-custom-list-container">
         <div class="container cards-custom-list">
            <div class="card-custom-container">
               <div class="description-view-mega-container">
                  <div class="card-custom-description">
                     <form role="form" method="POST" action="">
                           {{ csrf_field() }}
   
                        <div class="form-group">
                           <label for="" class="control-label">Activé</label>
                           <input type="checkbox">
                        </div>
                        <div class="form-group">
                           <label for="role_id" class="control-label">Rôle</label>
                           <select class="form-control" name="" id="">
                              @foreach(\App\Models\Role::all() as $role)
                                 <option 
                                       @if($action === "edit")
                                          value="{{$user->roles[0]->id}}" selected
                                       @else
                                          value={{$role->id}}
                                       @endif
                                    >
                                    @if($action === "edit")
                                       {{ucfirst($user->roles[0]->name)}}
                                    @else
                                       {{ucfirst($role->name)}}
                                    @endif
                                    
                                 </option>
                              @endforeach
                           </select>
                        </div>
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

                     </form>
                  </div>

               </div>
            </div>
                  <div class="action-buttons-in-footer">
                     <div class="action-button rounded-button">
                        <a href="{{route('showUsers')}}" class=" btn btn-primary">
                           <i class="fas fa-chevron-left"></i> &nbsp;
                           {{__("actions.back")}}
                        </a>
                     </div>
                     <div class="action-button rounded-button">
                        <a class="btn btn-primary" type="submit">
                           <i class="fas fa-plus"></i> &nbsp;
                           {{__("actions.save")}}
                        </a>
                     </div>
                  </div> 
         </div>
      </div>
   </div>

</div>
@endsection
