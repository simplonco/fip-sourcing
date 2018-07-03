
{{--provisoire, TO DO : afficher chaque block de réponse en fonction de la question choisie avec du react ??--}}
   <h5 class="title-questions">Réponse du candidat : </h5>
   <div class="box">
      <section class="container-answer" id="#container-answer">
         <span>
            @if(count($motivationAnswers) > 0)
            {{$motivationAnswers[0]->value}}
            @else
            <p>-</p>
            @endif
         </span>
      </section>
   </div>
