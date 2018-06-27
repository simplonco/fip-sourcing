<dl class="candidate-score-container">
   <div class="col-md-3 badges">
      <div>
         <i class="fa fa-trophy fa-2x" title="complété" color="{{'#00e861'}}"></i>  
         <p>HTML</p> {{$candidate->html_score}}
      </div>
      <div>
         <i class="fa fa-trophy fa-2x" title="non commencé" color="{{'#949393'}}"></i><p>CSS</p>
      </div>
      <div>
         <i class="fa fa-trophy fa-2x" title="en cours" color="{{'#00b2e8'}}"></i><p>JS</p>
      </div>
      <div>
         <i class="fa fa-trophy fa-2x" title="complété" color="{{'#00e861'}}"></i><p>ALGO</p>
      </div>
   </div>
   <div class="col-md-3">
      <div><dt>Créativité : </dt><dd>-</dd></div>
      <div><dt>Motivation : </dt><dd>-</dd></div>
      <div><dt>Culture générale : </dt><dd>-</dd></div>
      <div><dt>Logique : </dt><dd>-</dd></div>
      <div><dt>Spécifique formation : </dt><dd>-</dd></div>
      <div><dt>Badges gagnés : </dt><dd>-</dd></div>
   </div>
   <div class="col-md-6 global-score">
      <div>
         <dt>Score global :</dt>
         <p>{{$candidate->score}}</p>
      </div>
   </div>
</dl>



                            {{--TO Do : ajouter les badges
                            <div class="panel panel-default">
                      <div class="panel-heading">{{__('user.choose_user.score')}}</div>
                      <div class="panel-body">

                        <div class="row">
                          <div class="col-md-3">
                            <b>{{__('user.choose_user.score')}}  </b>
                          </div>
                          <div class="col-md-3">
                            {{$candidate->score}}
                          </div>
                        </div>
                        <br />
                        <div class="row">
                          <div class="col-md-3">
                            <b>{{__('user.choose_user.html_score')}}  </b>
                          </div>
                          <div class="col-md-3">
                            {{$candidate->html_score}}
                          </div>
                        </div>
                        <br />
                        <div class="row">
                          <div class="col-md-3">
                            <b>{{__('user.choose_user.css_score')}}  </b>
                          </div>
                          <div class="col-md-3">
                            {{$candidate->css_score}}
                          </div>
                        </div>
                        <br />
                        <div class="row">
                          <div class="col-md-3">
                            <b>{{__('user.choose_user.js_score')}}  </b>
                          </div>
                          <div class="col-md-3">
                            {{$candidate->js_score}}
                          </div>
                        </div>
                        <br />
                        <div class="row">
                          <div class="col-md-3">
                            <b>{{__('user.choose_user.php_score')}}  </b>
                          </div>
                          <div class="col-md-3">
                            {{$candidate->php_score}}
                          </div>
                        </div>
                        <br />

                      </div>
                    </div>
                            --}}

