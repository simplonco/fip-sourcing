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

    @if($adminSession === "edit")
    
      <div class="container container--medium">
      <h3 class="danger"> {{__("Zone danger")}}</h3>
         <div class="cards-custom-list-mega-container">
            <div class="card-custom-list-container">
               <div class="container cards-custom-list">
                  <div class="card-custom-container">
                     <div class="card-custom-image card-custom-image--delete">
                        <i class="fas fa-trash fa-4x"></i>
                     </div>
                     <div class="description-view-mega-container cards-custom-list--df
                     cards-custom-list--ai-c
                     cards-custom-list--bg-red">
                        <div class="card-custom-description card-custom-description--df card-custom-description--jc-c card-custom-description--ai-c
                        card-custom-description--color-w
                        ">
                           {{__("Si vous supprimez cette session, l'action est irréversible")}} 
                           <button class="btn btn-danger">
                              {{__("Supprimer")}}
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @endif

@endsection
