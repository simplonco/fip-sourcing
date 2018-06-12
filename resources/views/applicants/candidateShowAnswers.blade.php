
<div class="col-md-12 question-mega-container">
   <div class="question-dropdown col-md-12">
      <span class="fa-stack fa-lg">
         <i class="fas fa-square fa-stack-2x"></i>
         <i class="fas fa-question fa-stack-1x fa-inverse"></i>
      </span>
      <select>
         <option><a class="dropdown-item" href="#">{{__('projection.hero')}}</a></option>
         <option><a class="dropdown-item" href="#">{{__('projection.dev_qualities')}}</a></option>
         <option><a class="dropdown-item" href="#">{{__('projection.personal_goal')}}</a></option>
         <option><a class="dropdown-item" href="#">{{__('projection.dev_point')}}</a></option>
         <option><a class="dropdown-item" href="#">{{__('projection.superpower')}}</a></option>
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
   <div class="panel-body">
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
            <label>0<input type="radio" name="hero_dev" value="0"></label>
            <label>1<input type="radio" name="rating-questions" value="1"></label>
            <label>2<input type="radio" name="rating-questions" value="2"></label>
            <label>3<input type="radio" name="rating-questions" value="3"></label>
         </form>
      </div>
      </div>
   </div>