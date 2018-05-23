@extends('layouts.app')

@section('content')
    <div class="row">
        <h3 class="text-center">NOUVEL UTILISATEUR</h3>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                    <form class="form-horizontal" role="form" method="POST" action="">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Activé</label>
                            <div class="col-md-6">
                                <input type="checkbox">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="role_id" class="col-md-4 control-label">Rôle</label>
                            <div class="col-md-6">
                                <select name="" id="">
                                    @foreach(\App\Models\Role::all() as $role)
                                    <option value={{$role->id}}>{{$role->name}}
                                        @endforeach
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="end_session" class="col-md-4 control-label">{{ __('user.choose_user.last_name')}}</label>
                            <div class="col-md-6">
                                <input type="text" name="last_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-md-4 control-label">{{__('user.choose_user.first_name')}}</label>
                            <div class="col-md-6">
                                <input type="text" name="first_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-md-4 control-label">{{ __('user.choose_user.email')}}</label>
                            <div class="col-md-6">
                                <input type="mail" name="email">
                            </div>
                        </div>

                        <div class="container-fluid">
                                <a href="#" class=" btn btn-primary">RETOUR</a>
                                <button class="center-block btn btn-primary" type="submit">ENREGISTRER</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
