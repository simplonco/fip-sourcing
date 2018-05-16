@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h2 class="text-center">ACCUEIL</h2>
            <div class="col-md-4">
                <div class="card text-center text-white bg-danger mb-3">
                    <div class="card-body">
                        <a href=""><i class="fa fa-question fa-5x"></i></a>
                        <h3 class="card-title"><a href="">Questionnaires</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center text-white bg-danger mb-3">
                    <div class="card-body">
                        <a href="{{route('recruiterFormations')}}"><i class="fa fa-file-alt fa-5x"></i></a>
                        <h3 class="card-title"><a href="{{route('recruiterFormations')}}">Formations</a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center text-white bg-danger mb-3">
                    <div class="card-body">
                        <a href="{{route('candidateSearch')}}"><i class="fa fa-user fa-5x "></i></a>
                        <h3 class="card-title"><a href="{{route('candidateSearch')}}">Candidats</a>
                            </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection