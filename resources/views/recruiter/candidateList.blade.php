@extends('layouts.app')

@section('content')
    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif

    <div class="container">
        <div class="row">
            <h3 class="text-center">{{$session->formation->name}} du {{$session->begin_session->format('d/m/y')}} au {{$session->end_session->format('d/m/y')}} à {{$session->city}}</h3>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <form class="form-horizontal" action="">
                        <div class="checkbox">
                            <label for="checkbox1">
                                Afficher les candidatures en cours()
                            </label>
                            <input type="checkbox"/>
                        </div>
                    </form>

                    <div class="panel-body">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th><input type="checkbox"></th>
                                <th>{{__('user.choose_user.last_name')}}
                                    <a href="{{ route('recruiterFormationCandidatesList', [$session->formation->id, 'last_name', 'asc']) }}"><i class="fa fa-sort-asc" aria-hidden="true"></i></a>
                                    <a href="{{ route('recruiterFormationCandidatesList', [$session->formation->id, 'last_name', 'desc']) }}"><i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                                </th>
                                <th>{{__('user.choose_user.first_name')}}</th>
                                <th>Progression</th>
                                <th>{{__('game.badges')}}</th>
                                <th>{{__('user.choose_user.score')}}</th>
                                <th>Nb d'évaluation</th>
                                <th>Evalué</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($candidates as $candidate)
                                <tr>
                                    <td>
                                        <form action="">
                                            <input type="checkbox">
                                        </form>
                                    </td>
                                    <td><a href="{{ route('candidateFormationShow', [$candidate->id, $session->formation->id]) }}">{{$candidate->last_name}}</a></td>
                                    <td>{{$candidate->first_name}}</td>
                                    <td>{{$candidate->get_progress()}}{{-- pas sur car résultat en pourcentage attendu,à modifier--}}</td>
                                    <td>{{--badges à ajouter--}}</td>
                                    <td>{{get_score($candidate)}}</td>
                                    <td>{{$candidate->candidate_notes()->count()}}</td>
                                    <td>{{--evalué : oui ou non--}}</td>
                                </tr>
                            @endforeach
                            {{ $candidates->links() }}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 ">
                        <a href="{{ route('recruiterIndex') }}" class="btn btn-primary">RETOUR</a>
                    </div>
                    <div class="col-md-2">
                        <a href="#{{--lien vers page de tri --}}" class="btn btn-primary">TRIER</a>
                    </div>
                    <div class="col-md-2 ">
                        <a href="#{{-- permet de clore les candidatures pour cette session --}}" class="btn btn-primary">CLORE</a>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
