<div class="card-custom-container">
   @if($recruiterFormations == "new")
      <a href="">
   @endif   
   <div class="card-custom-image">
      @if($recruiterFormations == "applicants")
         <i class="fa fa-file-alt fa-5x"></i>
         @if(null !== $candidate->currentSession()->formation)
            <p>{{$candidate->currentSession()->formation->name}}</p>
         @else <p>-</p>
         @endif
      @elseif($recruiterFormations == "ongoing")
         <i class="fa fa-file-alt fa-5x"></i>
         <p>{{$session->formation->name}}</p>
      @elseif($recruiterFormations == "coming")
         <i class="fa fa-file-alt fa-5x"></i>
         <p>{{$session->formation->name}}</p>
      @elseif($recruiterFormations == "new")
            <i class="fa fa-times fa-5x" style="transform: rotate(-45deg);"></i>
      @endif
   </div>
   @if($recruiterFormations == "new")
      </a>
   @endif
   <div class="card-custom-description">
      @if($recruiterFormations == "applicants")
         <p>
            {{$candidate->first_name}} {{$candidate->last_name}} 
         </p>
      @endif   
      @if($recruiterFormations == "applicants") 
         <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi perspiciatis laudantium necessitatibus unde quis ipsa beatae nihil enim voluptatibus eveniet.
         </p>
      @elseif($recruiterFormations == "ongoing") 
         {{$session->formation->description}}
      @elseif($recruiterFormations == "coming")
         {{$session->formation->description}}
      @endif
      @if($recruiterFormations == "applicants")
         @if(!empty($candidate->currentSession()->begin_session && !empty($candidate->currentSession()->end_session)))
            <p class="card-custom-description-date">
                  Du {{$candidate->currentSession()->begin_session->format('d/m/y')}}  au {{$candidate->currentSession()->end_session->format('d/m/y')}}
            </p>
         @endif 
      @elseif($recruiterFormations == "ongoing")
         @if(!empty($session->begin_session && !empty($session->end_session)))
            <p class="card-custom-description-date">
               Du {{$session->begin_session->format('d/m/y')}} au {{$session->end_session->format('d/m/y')}}
            </p>
         @endif            
      @elseif($recruiterFormations == "coming")
         @if(!empty($session->begin_session && !empty($session->end_session)))
            <p class="card-custom-description-date">
               Du {{$session->begin_session->format('d/m/y')}} au {{$session->end_session->format('d/m/y')}}
            </p>
         @endif
      @elseif($recruiterFormations == "new")
         <p class="card-custom-description-date">Créer une nouvelle formations...</p>            
      @endif    
   </div>
   <div class="card-custom-view">
      @if($recruiterFormations == "applicants") 
         <a href="" class="fa-stack">
            <i class="fa fa-circle fa-stack-2x" style="color: hsla(0, 0%, 57%, 1)"></i>
            <i class="fa fa-eye fa-stack-1x" style="color: hsla(0, 0%, 90%, 1);"aria-hidden="true"></i>
         </a>
      @endif
      @if($recruiterFormations == "ongoing")
         <div class="card-custom-action-buttons">
            {{-- TODO: hover on buttons --}}
            <a href="" class="fa-stack">
               <i class="fa fa-circle fa-stack-2x" id="plane" style="color: hsla(0, 0%, 57%, 1)"></i>
               <i class="fa fa-paper-plane fa-stack-1x" style="color: hsla(0, 0%, 90%, 1);"aria-hidden="true"></i>
            </a>
            <a href="" class="fa-stack">
               <i class="fa fa-circle fa-stack-2x" id="pencil" style="color: hsla(0, 0%, 57%, 1)"></i>
               <i class="fa fa-pencil-alt fa-stack-1x" style="color: hsla(0, 0%, 90%, 1);"aria-hidden="true"></i>
            </a>
            <a href="" class="fa-stack">
               <i class="fa fa-circle fa-stack-2x" id="trash" style="color: hsla(0, 0%, 57%, 1)"></i>
               <i class="fa fa-trash-alt fa-stack-1x" style="color: hsla(0, 0%, 90%, 1);"aria-hidden="true"></i>
            </a>
            <a href="" class="fa-stack">
               <i class="fa fa-circle fa-stack-2x" id="star" style="color: hsla(0, 0%, 57%, 1)"></i>
               <i class="fa fa-star fa-stack-1x" style="color: hsla(0, 0%, 90%, 1);"aria-hidden="true"></i>
            </a>
         </div>
      @endif
   </div>
</div>
