@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center">RECHERCHER UN CANDIDAT</h2>
        <div class="row">
            <div class="col-md-8">
                <form class="navbar-form" role="search">

                    <input class="form-control" placeholder="exemple Jean DUBOIS" name="" id="srch-term" type="text">
                </form>
            </div>
        </div>
        <div class="row">
            <h4>Résultats de la recherche()</h4>
            <div class="box">
                <section class="box-body">
                   @include('partials.recruiter.candidate')
                </section>
            </div>
        </div>
    </div>
@endsection