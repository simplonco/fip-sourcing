@extends('layouts.app')

@section('content')

@if(Session::has('flash_message'))
<div class="alert alert-success">
  {{ Session::get('flash_message') }}
</div>
@endif

@if($errors->any())
<div class="alert alert-danger">
  @foreach($errors->all() as $error)
  <p>{{ $error }}</p>
  @endforeach
</div>
@endif

<div class="container container--medium">
   <div class="title-top-container">
      <h3 class='text-center title-top'>
         @if($adminTrainings == 'create')
         {{__('formation.add')}}
         @elseif($adminTrainings == "edit")
            {{__('formation.edit')}} {!! $formation->name !!}
         @endif
      </h3>
   </div>

<div class="cards-custom-list-mega-container">
   <div class="card-custom-list-container">
      <div class="container cards-custom-list">
         <div class="card-custom-container">
            <div class="description-view-mega-container">
               <div class="card-custom-description">

               @if($adminTrainings == 'create')
                  {!! Form::open([
                  'route' => ['admin.courses.store']
                  ]) !!}
               @elseif($adminTrainings == "edit")
                  {!! Form::model($formation, [
                  'method' => 'POST',
                  'route' => ['admin.courses.update', $formation->id]
                  ]) !!}
               @endif

               <div class="form-group">
                  {!! Form::label('name', __('formation.choose_formation.name'), ['class' => 'control-label']) !!}
                  {!! Form::text('name', null, ['class' => 'form-control']) !!}
               </div>

               <div class="form-group">
                  {!! Form::label('description', __('formation.choose_formation.description'), ['class' => 'control-label']) !!}
                  {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
               </div>

               {{-- @if($adminSessions != "edit" || $adminSessions !== "create")
               
                  <div class="form-group">
                     {!! Form::label('city', __('formation.choose_formation.city'), ['class' => 'control-label']) !!}
                     {!! Form::text('city', null, ['class' => 'form-control']) !!}
                  </div>

                  <div class="form-group">
                     {!! Form::label('year', __('formation.choose_formation.year'), ['class' => 'control-label']) !!}
                     {!! Form::text('year', null, ['class' => 'form-control']) !!}
                  </div>

                  <div class="form-group">
                     {!! Form::label('begin_session', __('formation.choose_formation.begin_session'), ['class' => 'control-label']) !!}
                     {!! Form::date('begin_session', null, ['class' => 'form-control']) !!}
                  </div>

                  <div class="form-group">
                     {!! Form::label('end_session', __('formation.choose_formation.end_session'), ['class' => 'control-label']) !!}
                     {!! Form::date('end_session', null, ['class' => 'form-control']) !!}
                  </div>
               @endif --}}

               <div class="rounded-button">
                  <button class="btn btn-primary"><i class="fas fa-check"></i>&nbsp;{{__('general.submit')}} </button>
                  {{-- {!! Form::submit(__('general.submit'), ['class' => 'btn btn-primary']) !!} --}}
               </div>

               {!! Form::close() !!}
            </div>
               
            </div>
         </div>
      </div>
   </div>
</div>

{{-- <script type="text/javascript">
  jQuery(document).ready(function($) {
  var url = "{{ route('typeahead.response') }}";
  
  $("#search_text").typeahead({
      source:  function (query, process) {
      console.log("test");
      return $.get(url, { query: query }, function (data) {
              return process(data);
          });
      }
  });
});
</script> --}}

@endsection
