<?php

namespace App\Http\Controllers\Recruiter;

use App\Models\Evaluation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use App\Models\Formation;
use App\Models\Session;
use App\Models\Note;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Questionnaire;
use Illuminate\Support\Facades\Config;


//use Illuminate\Support\Facades\Session;

class CandidateController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function recruiterFormationCandidatesList($session_id, $order=null, $ascending='asc')
  {
    $session = Session::findOrFail($session_id);

    $learnerRoleId = 2;

    $candidates = getApplyingFormationCandidates($session_id);
    
    if($order != null){
      $candidates = $ascending === 'asc'? $candidates->orderBy($order, 'asc') : $candidates->orderBy($order, 'desc');
    }

    $candidates_pagination = $candidates->orderBy('score', 'desc')->paginate(10);

    return view('applicants.candidateList', ['candidates'=>$candidates_pagination, 'session'=>$session]);
  }


  public function recruiterCandidateSearch(){

      $candidates = User::take(5)->paginate(12);
      return view('applicants.searchCandidate', compact('candidates'));
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function candidateFormationShow(User $candidate, Formation $formation)
  {
    $questions = $candidate
      ->sessions()->where('formation_id', $formation->id)->orderBy('id','desc')->first()
      ->formation
      ->questionnaires->map(function($item, $key){
          return $item->questions;
        });
    $answers = $questions->first()->map(function($item, $key){
        return $item->answers;
    });
    $answer = $answers->first()->map(function($item, $key){
        return $item ;
    });
     //$question->answer
    return view('applicants.candidateShow', [
      'candidate' => $candidate, 
      'formation' => $formation,
      'recruiter'=> Auth::user(), 
      'questions'=>$questions,
        'answer'=> $answer
    ]);

  }

  /**
  * Evaluate
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function candidateFormationEvaluate($candidate_id, $formation_id)
  {
    $candidate = User::findOrFail($candidate_id);
    $recruiter = Auth::user();
    $recruiter_id = $recruiter->id;
    $formation = Formation::findOrFail($formation_id);

    $note = Note::whereHas('candidates', function ($q) use ($candidate_id) {
      $q->where('candidate_id', $candidate_id);
    })->whereHas('recruiter', function ($q) use ($recruiter_id) {
      $q->where('recruiter_id', $recruiter_id);
    });

    if(!$note->first()){
      $note = Note::create();
      $note->recruiter()->associate($recruiter);
      $note->candidates()->associate($candidate);
      $note->formation()->associate($formation);
      $note->save();
    }


    return view('recruiter.candidateEvaluate', ['candidate' => $candidate, 'note' => $note->first()]);
  }


  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function candidateFormationSendEvaluation($id, Request $request)
  {
    $note = Note::findOrFail($id);

    $this->validate($request, [
      'hero_note' => 'required',
      'dev_qualities_note' => 'required',
      'personal_goal_note' => 'required',
      'dev_point_note' => 'required',
      'superpower_note' => 'required',
      'comment' => 'required|string|max:255'
    ]);

    $input = $request->all();


    $note->fill($input)->save();

    Session::flash('flash_message', __('recruiter_panel.candidate_evaluated'));

    return redirect()->route('recruiterFormationCandidatesList', $note->formation()->first()->id);
  }

  public function saveEvaluation(Request $request){

      $evaluation = new Evaluation;

      $evaluation->answer_id = $request->input('answer_id');
      $evaluation->recruiter_id = Auth::user()->id;
      $evaluation->value = $request->input('value');

      $evaluation->save();

        return redirect()->back();
  }

  /*public function updateEvaluation(){

      $evaluation = Evaluation::find($id);

  }*/

  public function refreshFormationSololearn($formation_id)
  {
    $formation = Formation::findOrFail($formation_id);
    $candidates = getApplyingFormationCandidates($formation_id);
    foreach ($candidates->get() as $candidate) {
      updateSololearnScore($candidate);
    }

    $candidates_pagination = $candidates->orderBy('score', 'desc')->paginate(10);

    Session::flash('flash_message', __('game.sololearn_formation_refreshed'));

    return redirect()->route('recruiterFormationCandidatesList', $formation->id);
  }


    public function getMotivationQuestionsAndAnswers(Request $request, $candidate_id){
     $questions = Question::where('category_id', 3)->get();
     $answers = Answer::where('candidate_id',$candidate_id)->get();
     $evaluation = $answers->map(function($item, $key){
        return $item->evaluations->first();
     });

        return response()->json(["questions"=>$questions, "answers"=>$answers]);

    }



}
