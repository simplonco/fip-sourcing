@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="title-top-container">
            <h3 class='text-center title-top'>
               {{__("Informations de la session")}} {!! $session->formation->name !!}
            </h3>
        </div>
        <div class="cards-custom-list-mega-container">
            <div class="card-custom-list-container">
                <div class="container cards-custom-list">
                    <div class="card-custom-container">
                        <div class="card-custom-image">
                           <i class="fas fa-clipboard-list fa-5x"></i>
                        </div>  
                        <div class="description-view-mega-container">
                            <div class="card-custom-description">
                                <dl>
                                    <div class="">
                                       <div class="col-md-3">

                                          <dt>{{__('Lieu')}}</dt><dd> {{$session->city}}</dd>
                                          <br>
                                          <dt>{{__('Année')}}</dt><dd> {{$session->year}}</dd>
                                       </div>
                                       <div class="col-md-3">

                                          <dt>{{__('Date de début')}}</dt><dd> {{$session->begin_session->format('Y-m-d')}}</dd>
                                          <br>
                                          <dt>{{__('Date de fin')}}</dt><dd> {{$session->end_session->format('Y-m-d')}}</dd>
                                       </div>
                                       <div class="col-md-6">

                                          <dt>{{__("Date d'ouvreture des candidatures")}}</dt><dd> {{$session->application_start_date}}</dd>
                                          <br>
                                          <dt>{{__("Date de fermeture des candidatures")}}</dt><dd> {{$session->application_end_date}}</dd>
                                       </div>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="action-buttons-in-footer">
                        <div class="action-button rounded-button">
                            <a href="#" class="btn btn-primary">
                                {{__('Voir les candidats')}}
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

@endsection