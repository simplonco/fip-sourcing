
<div class="question-mega-container">
   <div class="question-dropdown col-md-12">
      <span class="fa-stack fa-lg">
         <i class="fas fa-square fa-stack-2x"></i>
         <i class="fas fa-question fa-stack-1x fa-inverse"></i>
      </span>
      <select>
         <option value="">plop</option>
         <option><a href="#">{{__('projection.hero')}}</a></option>
         <option><a href="#">{{__('projection.dev_qualities')}}</a></option>
         <option><a href="#">{{__('projection.personal_goal')}}</a></option>
         <option><a href="#">{{__('projection.dev_point')}}</a></option>
         <option><a href="#">{{__('projection.superpower')}}</a></option>
      </select>
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
         <h5 class="title-questions">Rappel des objectifs de la question : </h5>
         <div class="container-question">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab cum facere fuga illo ipsa laborum maiores non optio quam quibusdam sed sit.</p>
         </div>
      </div>
      <div class="col-md-12">
            @include('partials.applicants.candidateShowAnswers')
      </div>
      <div class="radio-button-rating">
         <form action="" method="post">
            <div class="action-buttons-container action-buttons-container--no-bg">
               <div class="action-button action-button--df rounded-button">
                  <input type="radio" class="dp-n" name="rating-questions" id="rad0"vvalue="0">
                  <label class="btn btn-primary btn--extended-5 btn--extended-mon-4" for="rad0">0</label>
                  <input type="radio" class="dp-n" name="rating-questions" id="rad1" value="1">
                  <label class="btn btn-primary btn--extended-5 btn--extended-mon-4" for="rad1">1</label>
                  <input type="radio" class="dp-n" name="rating-questions" id="rad2" value="2">
                  <label class="btn btn-primary btn--extended-5 btn--extended-mon-4" for="rad2">2</label>
                  <input type="radio" class="dp-n" name="rating-questions" id="rad3" value="3">
                  <label class="btn btn-primary btn--extended-5 btn--extended-mon-4" for="rad3">3</label>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>