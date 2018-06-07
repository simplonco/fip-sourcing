@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="title-top-container">
           <h3 class="text-center title-top">{{$session->formation->name}} du {{$session->begin_session->format('d/m/y')}} au {{$session->end_session->format('d/m/y')}} à {{$session->city}}</h3>
        </div>
        <div class="cardd-container">

            <div class="cardd">
                <a href="#">
                    <div class="card text-center text-white bg-danger mb-3">
                        <div class="card-body">
                            <i class="fa fa-question fa-5x"></i>
                            <h3 class="card-title">MAILS D'INVITATION</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="cardd">
                <a href="{{route('recruiterIndex')}}">
                    <div class="card text-center text-white bg-danger mb-3">
                        <div class="card-body navigation-container">
                            <i class="fa fa-file-alt fa-5x"></i>
                            <h3 class="card-title">MEMO
                            </h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="cardd">
                <a href="{{route('candidateSearch')}}">
                    <div class="card text-center text-white bg-danger mb-3">
                        <div class="card-body">
                            <i class="fa fa-user fa-5x "></i>
                            <h3 class="card-title">EVALUATION FINALE</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <a class="btn btn-primary" href="#" role="button">RETOUR</a>
            <a class="btn btn-primary" href="#" role="button">REOUVRIR LES CANDIDATURES</a>
            <a class="btn btn-primary" href="#" role="button">ARCHIVER LA FORMATION</a>

        </div>

    </div>
@endsection