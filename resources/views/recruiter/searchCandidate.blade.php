@extends('layouts.app')

@section('content')
    <div class="container">
       <div class="title-top-container">

          <h3 class="text-center title-top">RECHERCHER UN CANDIDAT</h3>
         </div>
            <div class="form-group">
                <form class="navbar-form" role="search">
                    <input class="form-control" placeholder="exemple Jean DUBOIS" name="" id="srch-term" type="text">
                </form>
            </div>
        <div class="row">
            <h4>Résultats de la recherche ({{$candidates->count()}})</h4>
            <div class="box">
                <section class="box-body">
                    @foreach($candidates as $candidate)
                    <ul class="list-unstyled">
                        <li>Candidat: {{$candidate->first_name}} {{$candidate->last_name}} </li>
                        @if(null !== $candidate->currentSession()->formation)
                            <li>{{$candidate->currentSession()->formation->name}}</li>

                        @endif
                        @if(!empty($candidate->currentSession()->begin_session && !empty($candidate->currentSession()->end_session)))
                        <li>Du {{$candidate->currentSession()->begin_session->format('d/m/y')}} au {{$candidate->currentSession()->end_session->format('d/m/y')}}
                            <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
                        </li>
                        @endif
                    </ul>
                    @endforeach
                </section>

            </div>
        </div>
    </div>
@endsection