@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3 class="text-center">CANDIDAT - {{$candidate->first_name}} {{$candidate->last_name}} </h3>
            <div class="col-md-8 col-md-offset-2">
                {{-- @include('partials.recruiter.candidateSummary') --}}
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
                            {{--TO Do : ajouter les badges
                            <div class="panel panel-default">
                      <div class="panel-heading">{{__('user.choose_user.score')}}</div>
                      <div class="panel-body">

                        <div class="row">
                          <div class="col-md-3">
                            <b>{{__('user.choose_user.score')}}  </b>
                          </div>
                          <div class="col-md-3">
                            {{$candidate->score}}
                          </div>
                        </div>
                        <br />
                        <div class="row">
                          <div class="col-md-3">
                            <b>{{__('user.choose_user.html_score')}}  </b>
                          </div>
                          <div class="col-md-3">
                            {{$candidate->html_score}}
                          </div>
                        </div>
                        <br />
                        <div class="row">
                          <div class="col-md-3">
                            <b>{{__('user.choose_user.css_score')}}  </b>
                          </div>
                          <div class="col-md-3">
                            {{$candidate->css_score}}
                          </div>
                        </div>
                        <br />
                        <div class="row">
                          <div class="col-md-3">
                            <b>{{__('user.choose_user.js_score')}}  </b>
                          </div>
                          <div class="col-md-3">
                            {{$candidate->js_score}}
                          </div>
                        </div>
                        <br />
                        <div class="row">
                          <div class="col-md-3">
                            <b>{{__('user.choose_user.php_score')}}  </b>
                          </div>
                          <div class="col-md-3">
                            {{$candidate->php_score}}
                          </div>
                        </div>
                        <br />

                      </div>
                    </div>
                            --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
