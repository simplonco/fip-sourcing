@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3 class="text-center">CANDIDAT - {{$candidate->first_name}} {{$candidate->last_name}} </h3>
            <div class="col-md-8 col-md-offset-2">
                @include('partials.recruiter.candidateSummary')
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <ul class="list-unstyled">
                                <li>Créativité : </li>
                                <li>Motivation</li>
                                <li>Culture générale:</li>
                                <li>Logique:</li>
                                <li>Spécifique formation:</li>
                                <li>Badges gagnés:</li>
                                <li>Score globale:</li>
                            </ul>
                            <div class="row">
                                <ul class="list-unstyled">
                                    <li>HTML</li>
                                     <li>CSS</li>
                                    <li>JS</li>
                                   <li>Algorithmique</li>
                                </ul>
                            </div>
                            {{--TO Do : ajouter les badges--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
