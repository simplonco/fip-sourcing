<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

use App\Models\Question;
use App\Models\Formation;
use App\Models\Answer;

class CustomFormController extends Controller
{
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
        // echo $q_id.' : '.$answer;
        //TODO : check if answer exists

        // If no answer yet, create it
        $answer = [
          'value' => $q_answer
        ];
        $created_answer = Answer::create($answer);
        $created_answer->candidate()->associate($candidate);
        $created_answer->question()->associate(Question::find($q_id));
       
        $created_answer->save();
      }
    }

    $questions = Question::All();

    return view('custom_form', ['questions'=>$questions]);
    // return view('candidate.panel');
  }

}
