@extends('layouts.app')

@section('content')
    <div class="row">
        <h3 class="text-center">NOUVEL UTILISATEUR</h3>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                    <form class="form-horizontal" role="form" method="POST" action="">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Activé</label>
                            <div class="col-md-6">
                                <input type="checkbox">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="begin_session" class="col-md-4 control-label">Rôle</label>
                            <div class="col-md-6">
                                <select name="" id="">
                                    <option value="formateur">formateur</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="end_session" class="col-md-4 control-label">{{ __('user.choose_user.last_name')}}</label>
                            <div class="col-md-6">
                                <input type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-md-4 control-label">{{__('user.choose_user.first_name')}}</label>
                            <div class="col-md-6">
                                <input type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-md-4 control-label">Mail</label>
                            <div class="col-md-6">
                                <input type="text">
                            </div>
                        </div>

                        <div class="container-fluid">
                            <button class="center-block btn btn-primary" type="submit">valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
