<?php

namespace App\Http\Controllers\Recruiter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use App\Models\Formation;
use App\Models\Note;
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

    $learnerRoleId = 2;
    $candidates = getApplyingFormationCandidates($formation_id);

    if($order != null){
      $candidates = $ascending === 'asc'? $candidates->orderBy($order, 'asc') : $candidates->orderBy($order, 'desc');
    }

    $candidates_pagination = $candidates->orderBy('score', 'desc')->paginate(10);

    return view('recruiter.candidateList', ['candidates'=>$candidates_pagination, 'formation'=>$formation]);
  }

  public function recruiterCandidateSearch(){

      $candidates = User::take(5)->paginate(12);
      return view('recruiter.searchCandidate', compact('candidates'));
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


    return view('recruiter.candidateEvaluate', ['candidate.blade.php' => $candidate, 'note' => $note->first()]);
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

}
