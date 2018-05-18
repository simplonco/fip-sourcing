@extends('layouts.app')

@section('content')
    <div class="row">
        <h3 class="text-center">NOUVELLE FORMATION</h3>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('recruiterFormationSave') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Formation</label>
                            <div class="col-md-6">
                                <select name="name">
                                    <option value="dev web">tttttt</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="begin_session" class="col-md-4 control-label">Date de début</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="begin_session" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="end_session" class="col-md-4 control-label">Date de fin</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="end_session" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-md-4 control-label">Lieu</label>
                            <div class="col-md-6">
                                <select name="city">
                                    <option value="Carcasonne">Carcassone</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-md-4 control-label">Questionnaire</label>
                            <div class="col-md-6">
                                <select name="title">
                                    <option value="lorem">lorem</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-md-4 control-label">Alternance</label>
                            <div class="col-md-3">
                                <input type="checkbox">
                            </div>
                            <label for="city" class="col-md-2 control-label">Certification</label>
                            <div class="col-md-3">
                                <input type="checkbox">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 col-md-offset-2">Spécificités, langage...(facultatif)</label>
                            <div class="col-md-6 col-md-offset-4">
                                <textarea name="" id="" cols="48" rows="10"></textarea>
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
