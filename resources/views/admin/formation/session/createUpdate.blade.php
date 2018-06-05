@extends('layouts.app')

@section('content')

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
                                    'url' => ['/admin/formation/show/'.$id.'/session/save']
                                    ]) !!}
                                @elseif($adminSession === "edit")
                                    {!! Form::model($session, [
                                    'method' => 'POST',
                                    'route' => ['sessionUpdate', $session->id]
                                    ]) !!}
                                @endif
                                    <div class="form-group">
                                        {!! Form::hidden('formation_id', $id, ['class' => 'form-control']) !!}
                                    </div>
                                <div class="form-group">
                                    {!! Form::label('city', __('Lieu'), ['class' => 'control-label']) !!}
                                    {!! Form::text('city', null, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('year', __('Année'), ['class' => 'control-label']) !!}
                                    {!! Form::text('year', null, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('begin_session', __("début de la session" ), ['class' => 'control-label']) !!}
                                    {!! Form::date('begin_session', null, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('end_session', __('fin de la session'), ['class' => 'control-label']) !!}
                                    {!! Form::date('end_session', null, ['class' => 'form-control']) !!}
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

@endsection
