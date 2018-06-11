@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="text-center">ENVOYER DES MAILS D'INVITATION</h3>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Expéditeur</label>
                                <div class="col-md-6">
                                    <input type="mail">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="role_id" class="col-md-4 control-label">Destinataires</label>
                                <div class="col-md-6">
                                    <select name="" id="">
                                        @foreach(\App\Models\User::all() as $user)
                                            <option value={{$user->id}}>{{$user->email}}
                                                @endforeach
                                            </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="end_session" class="col-md-4 control-label">Sujet du mail</label>
                                <div class="col-md-6">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city" class="col-md-4 control-label"></label>
                                <div class="col-md-6">
                                    <textarea name="" id="" cols="30" rows="10" placeholder="bla bla"></textarea>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <a href="#" class=" btn btn-primary">RETOUR</a>
                                <a href="#" class=" btn btn-primary">HISTORIQUE</a>
                                <button class="center-block btn btn-primary" type="submit">ENREGISTRER</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection