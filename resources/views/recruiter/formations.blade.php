@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center">MES FORMATIONS</h2>
        <div class="row">
            @include('partials.recruiter.formation')
        </div>
        <div class="row">
            <h2 class="text-center">FORMATIONS A VENIR</h2>
        </div>
        <div class="row">
            @include('partials.recruiter.formation')
        </div>

    </div>
@endsection