@extends('layouts.app')

@section('content')

@if(Session::has('flash_message'))
<div class="alert alert-success">
  {{ Session::get('flash_message') }}
</div>
@endif

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">{{__('candidate_panel.process')}}
          @if (Auth::user()->formations()->first())
          {{__('candidate_panel.selected_formation', ['name' => Auth::user()->formations()->first()->name])}}
          @endif</div>
          <div class="panel-body">
            @if (!Auth::user()->application_sent)
            <div class="progress">
              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{ Auth::user()->get_progress()/5*100}}%;" >{{ Auth::user()->get_progress()/5*100}}%</div>
            </div>
            <div>
              @if(Auth::user()->get_progress() === 5)
              {{__('candidate_panel.sendable_application')}}
              @else
              {{__('candidate_panel.non_sendable_application')}}
              @endif
            </div>
            <div class="row panel-btn">
              @if (!Auth::user()->formations()->first())
              <a href="{{ route('chooseFormation') }}" class="btn">
                @else
                <a href="{{ route('chooseFormation') }}" class="btn btn-ok">
                  @endif
                  <i class="fa fa-panel fa-list fa-2x" aria-hidden="true"></i>
                  {{__('candidate_panel.formation')}}
                </a>
              </div>
              @if (Auth::user()->formations()->first())
              <div class="row panel-btn">
                @if (!Auth::user()->is_operationnal_ok())
                <a href="{{ route('chooseOperationnal') }}" class="btn">
                  @else
                  <a href="{{ route('chooseOperationnal') }}" class="btn btn-ok">
                    @endif
                    <i class="fa fa-panel fa-calendar fa-2x" aria-hidden="true"></i>
                    {{__('candidate_panel.operationnal')}}
                  </a>
                </div>
                <div class="row panel-btn">
                  @if (!Auth::user()->is_administrative_ok())
                  <a href="{{ route('chooseAdministrative') }}" class="btn">
                    @else
                    <a href="{{ route('chooseAdministrative') }}" class="btn btn-ok">
                      @endif
                      <i class="fa fa-panel fa-id-card-o fa-2x" aria-hidden="true"></i>
                      {{__('candidate_panel.administrative')}}
                    </a>
                  </div>
                  <div class="row panel-btn">
                    @if (!Auth::user()->is_experience_ok())
                    <a href="{{ route('chooseExperience') }}" class="btn">
                      @else
                      <a href="{{ route('chooseExperience') }}" class="btn btn-ok">
                        @endif
                        <i class="fa fa-panel fa-briefcase fa-2x" aria-hidden="true"></i>
                        {{__('candidate_panel.experience')}}
                      </a>
                    </div>
                    <div class="row panel-btn">
                      @if (!Auth::user()->is_coding_ok())
                      <a href="{{ route('chooseCoding') }}" class="btn">
                        @else
                        <a href="{{ route('chooseCoding') }}" class="btn btn-ok">
                          @endif
                          <i class="fa fa-panel fa-code fa-2x" aria-hidden="true"></i>
                          {{__('candidate_panel.coding')}}
                        </a>
                      </div>
                      <div class="row panel-btn">
                        @if (!Auth::user()->is_projection_ok())
                        <a href="{{ route('chooseProjection') }}" class="btn">
                          @else
                          <a href="{{ route('chooseProjection') }}" class="btn btn-ok">
                            @endif
                            <i class="fa fa-panel fa-user fa-2x" aria-hidden="true"></i>
                            {{__('candidate_panel.projection')}}
                          </a>
                        </div>
                        @if(Auth::user()->is_administrative_ok() && Auth::user()->is_projection_ok() && Auth::user()->is_administrative_ok() && Auth::user()->is_experience_ok() && Auth::user()->is_operationnal_ok())
                        <div class="row">
                          <a href="{{ route('confirmSendApplication') }}" class="btn">
                            <i class="fa fa-panel fa-paper-plane-o fa-2x" aria-hidden="true"></i>
                            {{__('candidate_panel.send')}}
                          </a>
                        </div>
                        @endif
                        @endif
                        @else
                        <p>
                          {{__('candidate_panel.sent')}}
                        </p>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="panel panel-default">
                      <div class="panel-heading">{{__('game.score')}}
                      </div>
                      <div class="row">
                        <div class="panel-body score">
                          {{Auth::user()->score}}
                        </div>
                      </div>
                      <div class="row">
                        <div class= "panel-body">
                          <a href="{{ route('scoreDetails') }}" class="btn">{{__('game.score_details')}}</a>
                          </div>
                          </div>

                        </div>
                      </div>
                    </div>

                    @endsection
