@extends('layouts.app')

@section('content')
    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif

    

    <div class="container">
        <div class="row">
            <h3 class="text-center">Liste des utilisateurs</h3>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>{{--action--}}</th>
                                <th>{{--action--}}</th>
                                <th>{{__('user.choose_user.last_name')}}</th>
                                <th>{{__('user.choose_user.first_name')}}</th>
                                <th>Rôle</th>
                                <th>Activé</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach (User::all() as $user)
                                <tr>
                                    <td>
                                        <a href=""><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    </td>
                                    <td><a href=""><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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
                                       @isset($user->roles)
                                          {{$user->roles[0]->name}}
                                       @endisset
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 ">
                        <a href="{{route('admin')}}" class="btn btn-primary">RETOUR</a>
                    </div>
                    <div class="col-md-2">
                        <a href="{{route('createUser')}}" class="btn btn-primary">NOUVEL UTILISATEUR</a>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection


