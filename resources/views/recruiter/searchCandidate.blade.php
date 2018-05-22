@extends('layouts.app')

@section('content')
    <div class="container">
         <div class="title-top-container">
            <h3 class="text-center title-top">RECHERCHER UN CANDIDAT</h3>
         </div>
         <div class="form-group input-centered">
               <form class="navbar-form" role="search">
                  <input class="form-control col-md-10" placeholder="exemple Jean DUBOIS" name="" id="srch-term" type="text">
               </form>
         </div>
        <div class="container applicants-list">

            <h5 class="search-title">Résultats de la recherche ({{$candidates->count()}}) :</h5>
            @foreach($candidates as $candidate)
               <div class="card-cutom-container">
                  <div class="card-custom-image">
                     <i class="fa fa-file-alt fa-5x"></i>
                     @if(null !== $candidate->currentSession()->formation)
                        <p>{{$candidate->currentSession()->formation->name}}</p>
                     @else <p>-</p>
                     @endif
                  </div>
                  <div class="card-custom-description">
                     <p>
                        {{$candidate->first_name}} {{$candidate->last_name}} 
                     </p>
                     <p>
                        
                     </p>
                     @if(!empty($candidate->currentSession()->begin_session && !empty($candidate->currentSession()->end_session)))
                     <p class="card-custom-description-date">
                           Du {{$candidate->currentSession()->begin_session->format('d/m/y')}}  au {{$candidate->currentSession()->end_session->format('d/m/y')}}
                     </p>
                           
                        @endif    
                  </div>
                  <div class="card-custom-view">
                     <a href="" class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x" style="color: hsla(0, 0%, 57%, 1)"></i>
                        <i class="fa fa-eye fa-stack-1x" style="color: hsla(0, 0%, 90%, 1);"aria-hidden="true"></i>
                     </a>
                  </div>
               </div>
            @endforeach
        </div>
        </div>
    </div>
@endsection