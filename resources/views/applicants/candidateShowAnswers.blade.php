
<div class="question-mega-container">
   <div class="question-dropdown col-md-12">
      <span class="fa-stack fa-lg">
         <i class="fas fa-square fa-stack-2x"></i>
         <i class="fas fa-question fa-stack-1x fa-inverse"></i>
      </span>
      <form class="questions-form" action="#">
         <select>
            @if(isset($motivationQuestions)) 
               @foreach($motivationQuestions as $question)
                  <option id="{{$question->id}}"><a href="#">{{$question->title}}</a></option>
               @endforeach
            @endif
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
         <form action="{{route('trainer.value.save')}}" method="post">
            {{csrf_field()}}
            <div class="action-buttons-container action-buttons-container--no-bg">
               <div class="action-button action-button--df rounded-button">
                  <input type="radio" class="dp-n" name="value" id="rad0" value="0">
                  <label class="btn btn-primary btn--extended-5 btn--extended-mob-4" for="rad0">0</label>
                  <input type="radio" class="dp-n" name="value" id="rad1" value="1">
                  <label class="btn btn-primary btn--extended-5 btn--extended-mob-4" for="rad1">1</label>
                  <input type="radio" class="dp-n" name="value" id="rad2" value="2">
                  <label class="btn btn-primary btn--extended-5 btn--extended-mob-4" for="rad2">2</label>
                  <input type="radio" class="dp-n" name="value" id="rad3" value="3">
                  <label class="btn btn-primary btn--extended-5 btn--extended-mob-4" for="rad3">3</label>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>