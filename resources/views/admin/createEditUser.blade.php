@extends('layouts.app')

@section('content')

<div class="container">

   <div class="title-top-container">
      <h3 class='text-center title-top'>
         {{__('admin_panel.new_user')}}
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
                                 <option value={{$role->id}}>
                                    {{ucfirst($role->name)}}
                                 </option>
                              @endforeach
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="end_session" class="control-label">{{ __('user.choose_user.last_name')}}</label>
                           <input class="form-control" type="text" name="last_name">
                        </div>
                        <div class="form-group">
                           <label for="city" class="control-label">{{__('user.choose_user.first_name')}}</label>
                           <input class="form-control" type="text" name="first_name">
                        </div>
                        <div class="form-group">
                           <label for="city" class="control-label">{{ __('user.choose_user.email')}}</label>
                           <input class="form-control" type="mail" name="email">
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
