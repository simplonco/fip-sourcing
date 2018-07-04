<div class="question-mega-container">
   <div class="question-dropdown col-md-12">
      <span class="fa-stack fa-lg">
         <i class="fas fa-square fa-stack-2x"></i>
         <i class="fas fa-question fa-stack-1x fa-inverse"></i>
      </span>
      <form class="questions-form" action="#">
         <select questions-list class="questions-list">
              {{-- @foreach( as $question)
                  <option id="{{$question->id}}"><a href="#">{{$question->title}}</a></option>
               @endforeach --}}
         </select>
      </form>
      <a href="#">
         <span class="fa-stack fa-lg">
            <i class="fas fa-square fa-stack-2x"></i>
            <i class="fas fa-angle-left fa-stack-1x fa-inverse"></i>
         </span>
      </a>
      <a href="#">
         <span class="fa-stack fa-lg">
            <i class="fas fa-square fa-stack-2x"></i>
            <i class="fas fa-angle-right fa-stack-1x fa-inverse"></i>
         </span>
      </a>
   </div>
   <div class="panel-body mobile-pg-n">
      <div class="col-md-12">
         @include('applicants.candidateShowQuestions')
      </div>
      <div class="col-md-12">
         @include('partials.applicants.candidateShowAnswers')
      </div>
      <div class="radio-button-rating">
            <div class="action-buttons-container action-buttons-container--no-bg">
               <div class="action-button action-button--df rounded-button">
                  @for($i = 0; $i<4; $i++)
                     <form action="{{route('trainer.value.save')}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="answer_id" value{{--$answer->id--}}>
                        <input type="hidden" class="candidate_id" value="">
                        <input type="submit" class="dp-n " name="value" id="rad{{$i}}" value="{{$i}}">
                        <label class="btn btn-primary btn--extended-5 btn--extended-mob-4" for="rad{{$i}}">{{$i}}</label>
                     </form>
                     @endfor
               </div>
            </div>
      </div>
   </div>
</div>