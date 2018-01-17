<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

use App\Models\Question;
use App\Models\Formation;
use App\Models\Answer;
use App\Models\User;
use App\Models\Category;

class CustomFormController extends Controller
{

  //TODO : findQuestionsByFormationAndCategory
  
  /**
  *Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
  * Show the form for loading the appropriate custom form.
  *
  * @return \Illuminate\Http\Response
  */
  public function loadForm()
  {
    $questions = Question::All();

    return view('custom_form', ['questions'=>$questions]);
  }

  /**
  * Show the form for loading the appropriate custom form.
  *
  * @return \Illuminate\Http\Response
  */
  public function saveForm(Request $request)
  {
    $candidate = Auth::user();

    foreach($request->request as $q_id=>$q_answer){
      if($q_id != 0){
        $matchThese = ['candidate_id' => $candidate->id, 'question_id' => $q_id];
        $results = Answer::where($matchThese)->get();
        if(count($results) > 0){
          $answer = $results[0];
          $answer->value = $q_answer;
          $answer->save();
        } else {
          $answer = [
            'value' => $q_answer
          ];
          $created_answer = Answer::create($answer);
          $created_answer->candidate()->associate($candidate);
          $created_answer->question()->associate(Question::find($q_id));
        
          $created_answer->save();
        }
      }
    }

    $questions = Question::All();

    return view('custom_form', ['questions'=>$questions]);
    // return view('candidate.panel');
  }

  /**
  * Show the form for loading the appropriate custom form.
  *
  * @return \Illuminate\Http\Response
  */
  public function createQuestion()
  {
    $categories = Category::pluck('title', 'id');
    return view('create_question', ['categories'=>$categories]);
  }

  /**
  * Show the form for loading the appropriate custom form.
  *
  * @return \Illuminate\Http\Response
  */
  public function saveQuestion(Request $request)
  {
    $candidate = Auth::user();

    if ($request->choice_2 == null){
      $type = 'text';
    } else {
      $type = 'select';
    }

    $default_value = [
      $request->choice_1
    ];

    $request->choice_2 != null ? array_push($default_value, $request->choice_2):'';
    $request->choice_3 != null ? array_push($default_value, $request->choice_3):'';
    $request->choice_4 != null ? array_push($default_value, $request->choice_4):'';

    
    $question = [
      'title' => $request->question,
      'type' => $type,
      'mandatory' => $request->mandatory,
      'goal' => $request->goal,
      'weight' => $request->ponderation,
      'default_value' => $default_value
    ];
    $created_question = Question::create($question);
    $created_question->category()->associate(Category::find($request->category));
    $created_question->creator()->associate($candidate);
    $created_question->formation()->associate(Formation::find(1));
  
    $created_question->save();


    $categories = Category::pluck('title', 'id');
    return view('create_question', ['categories'=>$categories]);
  }

}
