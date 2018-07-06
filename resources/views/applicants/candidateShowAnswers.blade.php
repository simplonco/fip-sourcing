<div class="question-mega-container eval-tabs">
   <div class="question-dropdown col-md-12">
      <span class="fa-stack fa-lg">
         <i class="fas fa-square fa-stack-2x"></i>
         <i class="fas fa-question fa-stack-1x fa-inverse"></i>
      </span>
      <form class="questions-form" action="#">
         <select questions-list class="questions-list">
            @foreach($questions as $question)
            <option id="{{$question->id}}"><a href="#">{{$question->title}}</a></option>
            @endforeach
         </select>
      </form>
      <button class="btn eval-prev">
          <i class="fas fa-angle-left "></i>
      </button>
      <button class="eval-next">
            <i class="fas fa-angle-right"></i>
      </button>
   </div>
   @foreach($questions as $question)
   <div class="panel-body mobile-pg-n answer-panel  {{$loop->first ? 'answer-panel--active' :''}}">
      <div class="col-md-12">
         <h5 class="title-questions" title="{{$question->id}}">Objectif de la question : </h5>
         <p>{{$question->goal}}</p>
         <h5 class="title-questions">Réponse du candidat : </h5>
         <div class="box">
            <section class="container-answer" id="container-answer">
            <span>
                {{optional($question->answer)->value}}
            </span>
            </section>
         </div>
      </div>
      @if(!is_null($question->answer))
      <div class="radio-button-rating">
            <div class="action-buttons-container action-buttons-container--no-bg">
               <div class="action-button action-button--df rounded-button">
                   @for($i = 0; $i<4; $i++)

                     @if(is_null($eval = $question->answer->evaluations()->forRecruiter($recruiter->id, $question->answer->id)->first()))
                        <form action="{{route('trainer.value.save')}}" method="post">
                     @else
                        <form action="{{route('trainer.value.edit')}}" method="post">
                           <input type="hidden" name="_method" value="PUT">
                           <input type="hidden" name="evaluation_id" value="{{$eval->id}}">
                     @endif
                        {{csrf_field()}}
                        <input type="hidden" name="answer_id" value="{{$question->answer->id}}">
                        <input type="hidden" name="value" value="{{$i}}">
                         <div class="evaluation-labels">
                               <input type="submit" class="dp-n" id="rad{{$i}}">
                               <label class="btn btn-primary btn--extended-5 btn--extended-mob-4 eval-btn {{(optional($eval)->value === $i ? 'eval-btn--current' :'')}}" for="rad{{$i}}">{{$i}}</label>
                         </div>
                     </form>
                   @endfor
               </div>
            </div>
      </div>
      @endif
   </div>
   @endforeach
</div>
