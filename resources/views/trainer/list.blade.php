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
              <h4>{{__('former.former_all')}}</h4>
              <tr>
                <th style="text-align:center;">Actions</th>
                <th>{{__('user.choose_user.last_name')}}</th>
                <th>{{__('user.choose_user.first_name')}}</th>
                <th>{{__('user.choose_user.email')}}</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($formateurs as $formateur)
              <tr>
                <td style="text-align:center;">
                  <a href="{{ route('admin.trainers.index', $formateur->id) }}"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                  <a href="{{ route('admin.trainers.edit', $formateur->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                  <a href="{{ route('admin.trainers.destroy', $formateur->id) }}"><i class="fa fa fa-ban" aria-hidden="true"></i></a></td>
                  <td>{{$formateur->last_name}}</td>
                  <td>{{$formateur->first_name}}</td>
                  <td>{{$formateur->email}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <a href="{{ route('admin.trainers.create') }}" class="btn">{{__('former.former_add')}}</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  @endsection
