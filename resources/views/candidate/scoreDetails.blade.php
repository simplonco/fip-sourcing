@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">


      <div class="panel panel-info">
        <div class="panel-heading">{{__('game.score_details')}}</div>
        <div class="panel-body">

          <div class="row">
            <div class="col-md-3">
              <b>{{__('game.form_score')}}  </b>
            </div>
            <div class="col-md-3">
              {{get_score($candidate)}}
            </div>
            <div class="col-md-1">
              {{ round(Auth::user()->get_progress()/5*100) }}%
            </div>
            <div class="col-md-5">
              <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{ round(Auth::user()->get_progress()/5*100) }}%;" ></div>
              </div>
            </div>
          </div>

        </div>

        <div class="panel panel-info">
          <div class="panel-heading">{{__('game.sololearn')}}</div>
          <div class="panel-body">


            <div class="row">
              <div class="col-md-3">
                <b>{{__('game.html_score')}}  </b>
              </div>
              <div class="col-md-3">
                {{$candidate->html_score}}
              </div>
              <div class="col-md-1">
                {{ round($candidate->html_score/35*100) }}%
              </div>
              <div class="col-md-5">
                <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{ round($candidate->html_score/35*100) }}%;" ></div>
                </div>
              </div>

              <div class="col-md-3">
                <b>{{__('game.css_score')}}  </b>
              </div>
              <div class="col-md-3">
                {{$candidate->css_score}}
              </div>
              <div class="col-md-1">
                {{ round($candidate->css_score/35*100) }}%
              </div>
              <div class="col-md-5">
                <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{ round($candidate->css_score/35*100) }}%;" ></div>
                </div>
              </div>

              <div class="col-md-3">
                <b>{{__('game.js_score')}}  </b>
              </div>
              <div class="col-md-3">
                {{$candidate->js_score}}
              </div>
              <div class="col-md-1">
                {{ round($candidate->js_score/35*100) }}%
              </div>
              <div class="col-md-5">
                <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{ round($candidate->js_score/35*100) }}%;" ></div>
                </div>
              </div>

              <div class="col-md-3">
                <b>{{__('game.php_score')}}  </b>
              </div>
              <div class="col-md-3">
                {{ $candidate->php_score }}
              </div>
              <div class="col-md-1">
                {{ round($candidate->php_score/35*100) }}%
              </div>
              <div class="col-md-5">
                <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{ round($candidate->php_score/35*100) }}%;" ></div>
                </div>
              </div>

            </div>
            <a href="{{ route('refreshSololearn') }}" class="btn">{{__('game.refresh_sololearn')}}</a>

          </div>
        </div>

        <div class="panel-heading">{{__('game.total')}} : {{ $candidate->score }}</div>

      </div>


      <div class="panel panel-info">
        <div class="panel-heading">{{__('game.badges')}}</div>
        <div class="panel-body">
          <div class="row col-md-8 col-md-offset-2">

            @if (!$candidate->candidate_success()->welcome_success)
            <div class="alert alert-danger" role="alert" data-placement="bottom" title="{{__('game.welcome_success')}}">
              @else
              <div class="alert alert-success" role="alert" data-placement="bottom" title="{{__('game.welcome_success')}}">
                @endif
                {{__('game.welcome')}}
              </div>

              @if (!$candidate->candidate_success()->html_success)
              <div class="alert alert-danger" role="alert" data-placement="bottom" title="{{__('game.html_success')}}">
                @else
                <div class="alert alert-success" role="alert" data-placement="bottom" title="{{__('game.html_success')}}">
                  @endif
                  {{__('game.html_score')}}
                </div>

                @if (!$candidate->candidate_success()->css_success)
                <div class="alert alert-danger" role="alert" data-placement="bottom" title="{{__('game.css_success')}}">
                  @else
                  <div class="alert alert-success" role="alert" data-placement="bottom" title="{{__('game.css_success')}}">
                    @endif
                    {{__('game.css_score')}}
                  </div>

                  @if (!$candidate->candidate_success()->js_success)
                  <div class="alert alert-danger" role="alert" data-placement="bottom" title="{{__('game.js_success')}}">
                    @else
                    <div class="alert alert-success" role="alert" data-placement="bottom" title="{{__('game.js_success')}}">
                      @endif
                      {{__('game.js_score')}}
                    </div>

                    @if (!$candidate->candidate_success()->php_success)
                    <div class="alert alert-danger" role="alert" data-placement="bottom" title="{{__('game.php_success')}}">
                      @else
                      <div class="alert alert-success" role="alert" data-placement="bottom" title="{{__('game.php_success')}}">
                        @endif
                        {{__('game.php_score')}}
                      </div>

                      @if(!$candidate->candidate_success()->progress_success)
                      <div class="alert alert-danger" role="alert" data-placement="bottom" title="{{__('game.progress_success')}}">
                        @else
                        <div class="alert alert-success" role="alert" data-placement="bottom" title="{{__('game.progress_success')}}">
                          @endif
                          {{__('game.progress')}}
                        </div>

                        @if (!$candidate->candidate_success()->hi_score_success)
                        <div class="alert alert-danger" role="alert" data-placement="bottom" title="{{__('game.score_success')}}">
                          {{__('game.score_selected')}}
                          @else
                          <div class="alert alert-success" role="alert" data-placement="bottom" title="{{__('game.score_success')}}">
                            <a href="{{ url('https://ldevernay.github.io/howto_webdev/') }}" target="_blank" >{{__('game.score_selected')}}</a>
                            @endif
                          </div>

                          @if (!$candidate->candidate_success()->application_sent_success)
                          <div class="alert alert-danger" role="alert" data-placement="bottom" title="{{__('game.application_sent_success')}}">
                            @else
                            <div class="alert alert-success" role="alert" data-placement="bottom" title="{{__('game.application_sent_success')}}">
                              @endif
                              {{__('game.application_sent')}}
                            </div>

                          </div>

                        </div>
                      </div>
                    </div>
                  </div>

                  @endsection
