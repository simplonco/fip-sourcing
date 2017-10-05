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
        <div class="panel-body">

          <table class="table table-striped">
            <thead>
              <h4>{{__('recruiter_panel.list')}}{{$formation->name}}</h4>
              <tr>
                <th style="text-align:center;">{{__('recruiter_panel.note')}}</th>
                <th>{{__('user.choose_user.last_name')}}</th>
                <th>{{__('user.choose_user.first_name')}}</th>
                <th>{{__('user.choose_user.email')}}</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($candidates as $candidate)
              <tr>
                <td style="text-align:center;">
                  <a href="{{ route('candidateFormationShow', $candidate->id) }}"><i class="fa fa-info-circle" aria-hidden="true"></i></a></td>
                  <td>{{$candidate->last_name}}</td>
                  <td>{{$candidate->first_name}}</td>
                  <td>{{$candidate->email}}</td>
                </tr>
                @endforeach
                {{ $candidates->links() }}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


  @endsection
