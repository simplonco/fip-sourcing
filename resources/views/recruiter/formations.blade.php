@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="text-center">MES FORMATIONS</h3>
        <div class="row">
            @foreach($trainer->sessions as $session)
            @include('partials.recruiter.formation')
            @endforeach
        </div>
        <div class="row">
            <h3 class="text-center">FORMATIONS A VENIR</h3>
        </div>
        <div class="row">
            @include('partials.recruiter.formation')
        </div>

    </div>
@endsection