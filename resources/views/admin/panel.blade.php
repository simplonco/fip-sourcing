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
         <div class="panel-heading">{{__('admin_panel.title')}}</div>
         <div class="panel-body">
            <a href="{{ route('candidateList') }}" class="btn">{{__('admin_panel.applicants')}}</a>
            <a href="{{ route('admin.trainers.index') }}" class="btn">{{__('admin_panel.questionnaires')}}</a>
            <a href="{{ route('admin.trainers.index') }}" class="btn">{{__('admin_panel.trainers')}}</a>
            <a href="{{ route('formationList') }}" class="btn">{{__('admin_panel.trainings')}}</a>
         </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="links">
         <a href="{{ route('admin.trainers.index') }}" class="btn">{{__('admin_panel.formers')}}</a>
         <a href="{{ route('formationList') }}" class="btn">{{__('admin_panel.formations')}}</a>
      </div>
   </div>
   </div>

@endsection
