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
         {{$adminTrainings === "create" ? __('formation.add') : __('formation.edit'). $formation->name  }}
      </h3>
   </div>

   <div class="cards-custom-list-mega-container">
      <div class="card-custom-list-container">
         <div class="container cards-custom-list">
            <div class="card-custom-container">
               <div class="description-view-mega-container">
                  <div class="card-custom-description">
                     {{$adminTrainings === "create" ?  Form::open([
                     'route' => ['admin.courses.store']
                     ]) :  Form::model($formation, [
                     'method' => 'POST',
                     'route' => ['admin.courses.update', $formation->id]
                     ]) }}

                  <div class="form-group">
                     {!! Form::label('name', __('formation.choose_formation.name'), ['class' => 'control-label']) !!}
                     {!! Form::text('name', null, ['class' => 'form-control']) !!}
                  </div>

                  <div class="form-group">
                     {!! Form::label('description', __('formation.choose_formation.description'), ['class' => 'control-label']) !!}
                     {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                  </div>
                  <div class="rounded-button">
                     <button class="btn btn-primary"><i class="fas fa-check"></i>&nbsp;{{__('general.submit')}} </button>
                  </div>

                  {!! Form::close() !!}
               </div>

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
