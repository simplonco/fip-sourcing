@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">{{__('user.candidate_show')}}</div>
        <div class="panel-body">

          <div class="row">
            <div class="col-md-3">
              <b>{{__('user.choose_user.first_name')}} :</b>
            </div>
            <div class="col-md-3">
              {{$candidate->first_name}}
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <b>{{__('user.choose_user.last_name')}} :</b>
            </div>
            <div class="col-md-3">
              {{$candidate->last_name}}
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection
