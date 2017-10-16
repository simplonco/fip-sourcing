<?php

namespace App\Http\Controllers\Recruiter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;
use App\Formation;
use App\Note;
use Illuminate\Support\Facades\Session;

class CandidateController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function recruiterFormationCandidatesList($formation_id, $order=null, $ascending='asc')
  {
    $formation = Formation::findOrFail($formation_id);

    $roleId = 2;
    $candidates = User::whereHas('roles', function ($q) use ($roleId) {
      $q->where('role_id', $roleId);
    })->whereHas('formations', function ($q) use ($formation_id) {
      $q->where('formation_id', $formation_id);
    });
    if($order != null){
      $candidates = $ascending === 'asc'? $candidates->orderBy($order, 'asc') : $candidates->orderBy($order, 'desc');
    }

    $candidates_pagination = $candidates->orderBy('score', 'desc')->paginate(10);

    return view('recruiter.candidateList', ['candidates'=>$candidates_pagination, 'formation'=>$formation]);
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function candidateFormationShow($candidate_id, $formation_id)
  {
    $candidate = User::findOrFail($candidate_id);
    $formation = Formation::findOrFail($formation_id);

    return view('recruiter.candidateShow', ['candidate' => $candidate, 'formation' => $formation]);
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


}
