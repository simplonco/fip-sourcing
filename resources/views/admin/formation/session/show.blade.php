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
        <div class="cards-custom-list-mega-container">
            <h3>Liste des candiddats inscris à cette session</h3>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th style="text-align:center;">Actions</th>
                    <th>{{__('formation.choose_formation.name')}}</th>
                    <th>{{__('formation.choose_formation.description')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($applicants as $applicant)
                    <tr class="actions">
                        <td class="td-action-buttons  width-actions" style="text-align:center;">
                            {{--<a href="{{ route('formationShow', $formation->id) }}">
                                    <span class="fa-stack fa-sm">
                                       <i class="fas fa-circle fa-stack-2x"></i>
                                       <i class="fas fa-info fa-stack-1x" aria-hidden="true"></i>
                                    </span>
                            </a>
                            <a href="{{ route('formationEdit', $formation->id) }}">
                                    <span class="fa-stack fa-sm">
                                       <i class="fas fa-circle fa-stack-2x"></i>
                                       <i class="fas fa-pencil-alt fa-stack-1x" aria-hidden="true"></i>
                                    </span>
                            </a>
                            <a href="{{ route('formationDelete', $formation->id) }}">
                                    <span class="fa-stack fa-sm">
                                       <i class="fas fa-circle fa-stack-2x "></i>
                                       <i class="fas fa-ban fa-stack-1x" aria-hidden="true"></i>
                                    </span>
                            </a>--}}
                        </td>
                        <td>{{$applicant->last_name}} {{$applicant->first_name}}</td>
                        <td>{{}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection