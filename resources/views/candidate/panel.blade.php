@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">{{__('panel.process')}}
          @if (Auth::user()->formations()->first())
          {{__('panel.selected_formation', ['name' => Auth::user()->formations()->first()->name])}} 
          @endif</div>
          <div class="panel-body">
            @if (!Auth::user()->application_sent)
            <div class="progress">
              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 33%;" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">33%</div>
            </div>
            <div class="row">
              <a href="{{ route('chooseFormation') }}" class="btn">{{__('panel.formation')}}</a>
            </div>
            <div class="row">
              <a href="{{ route('chooseOperationnal') }}" class="btn">{{__('panel.operationnal')}}</a>
            </div>
            <div class="row">
              <a href="{{ route('chooseAdministrative') }}" class="btn">{{__('panel.administrative')}}</a>
            </div>
            <div class="row">
              <a href="{{ route('chooseExperience') }}" class="btn">{{__('panel.experience')}}</a>
            </div>
            <div class="row">
              <a href="{{ route('chooseCoding') }}" class="btn">{{__('panel.coding')}}</a>
            </div>
            <div class="row">
              <a href="{{ route('chooseProjection') }}" class="btn">{{__('panel.projection')}}</a>
            </div>

            <div class="row">
              <a href="{{ route('confirmSendApplication') }}" class="btn">{{__('panel.send')}}</a>
            </div>
            @else
            <p>
              {{__('panel.sent')}}
            </p>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection
