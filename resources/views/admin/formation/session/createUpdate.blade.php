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

    <div class="container">
        <div class="title-top-container">
            <h3 class='text-center title-top'>
                @if($adminSession === 'create')
                    {{__(' Créer une nouvelle session')}}
                   <small>{!! $training->name !!}</small>
                @elseif($adminSession === "edit")
                    {{__('Editer la session')}} <small>{!! $training->name !!}</small>
                @endif
            </h3>
        </div>

        <div class="cards-custom-list-mega-container">
            <div class="card-custom-list-container">
                <div class="container cards-custom-list">
                    <div class="card-custom-container">
                        <div class="description-view-mega-container">
                            <div class="card-custom-description">

                                @if($adminSession === 'create')
                                    {!! Form::open([
                                    'url' => ['/admin/formation/show/'.$formation_id.'/session/save']
                                    ]) !!}
                                    
                                @elseif($adminSession === "edit")
                                    {!! Form::model($session, [
                                    'method' => 'POST',
                                    'route' => ['sessionUpdate', $session->id]
                                    ]) !!}
                                    <div class="form-group">
                                       {!! Form::hidden('id', $session->id, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::hidden('formation_id', $session->formation_id, ['class' => 'form-control']) !!}
                                     </div>
                                @endif
                                    

                                <div class="form-group">
                                    {!! Form::label('city', __('Lieu'), ['class' => 'control-label']) !!}
                                    {!! Form::text('city', null, ['class' => 'form-control']) !!}
                                </div>

                                @if($adminSession === "create")
                                    <div class="form-group" style="display:none;">
                                       <input name="formation_id" type="text" value="{{$formation_id}}" hidden>
                                    </div>

                                @endif

                                <div class="form-group">
                                    {!! Form::label('year', __('Année'), ['class' => 'control-label']) !!}
                                    {!! Form::text('year', null, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    <label for="" class="control-label">{{__("Début de la session" )}}</label>
                                    <input  
                                       class="form-control"
                                       type="date" 
                                       name="begin_session" 
                                       id="" 
                                       @if($adminSession==="edit") {
                                          value="{{$session->begin_session->format('Y-m-d')}}"
                                       }
                                       @endif
                                       >
                                </div>

                                <div class="form-group">
                                    <label for="" class="control-label">{{__("Fin de la session" )}}</label>
                                    <input  
                                       class="form-control"
                                       type="date" 
                                       name="end_session" 
                                       id="" 
                                       @if($adminSession==="edit") {
                                          value="{{$session->end_session->format('Y-m-d')}}"
                                       }
                                       @endif
                                    >
                                 </div>

                                <div class="form-group">
                                    {!! Form::label('application_start_date', __("Date d'ouverture des candidatures" ), ['class' => 'control-label']) !!}
                                    {!! Form::date('application_start_date', null, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('application_end_date', __("Date de fermeture des candidatures" ), ['class' => 'control-label']) !!}
                                    {!! Form::date('application_end_date', null, ['class' => 'form-control']) !!}
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
<<<<<<< HEAD
=======

>>>>>>> d4821b7431ccea696d9296dd604f8548604cb0ea
@endsection
