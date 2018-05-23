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
                            <div class="dropdown show">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Questions
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">{{__('projection.hero')}}</a>
                                    <a class="dropdown-item" href="#">{{__('projection.dev_qualities')}}</a>
                                    <a class="dropdown-item" href="#">{{__('projection.personal_goal')}}</a>
                                    <a class="dropdown-item" href="#">{{__('projection.dev_point')}}</a>
                                    <a class="dropdown-item" href="#">{{__('projection.superpower')}}</a>
                                </div>
                            </div>
                        </div>
                        <h5>Rappel des objectifs de la question : </h5>
                    </div>
                    <div class="row">

                        @include('partials.recruiter.candidateShowAnswer')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection