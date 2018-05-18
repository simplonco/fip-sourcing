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
                            <div class="col-md-3">
                                <b>{{__('projection.hero')}}  </b>
                            </div>
                            <div class="col-md-3">
                                {{$candidate->hero}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>