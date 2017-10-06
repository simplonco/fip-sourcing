<?php

namespace App\Http\Controllers\Recruiter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;
use App\Formation;
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
    $candidates_pagination = $candidates->paginate(10);
    // ->orderBy('last_name');

    return view('recruiter.candidateList', ['candidates'=>$candidates_pagination, 'formation'=>$formation]);
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function candidateFormationShow($id)
  {
    $candidate = User::findOrFail($id);

    return view('recruiter.candidateShow', compact('candidate'));
  }


  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function candidateFormationUpdate($id, Request $request)
  {
    //TODO: add validation as soon as fields to display are chosen
    $candidate = User::findOrFail($id);

    $input = $request->all();

    $candidate->fill($input)->save();

    Session::flash('flash_message', __('recruiter_panel.formation_updated'));

    return Redirect()->route('recruiterIndex');
  }


  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function candidateFormationDelete($id)
  {
    $candidate = User::findOrFail($id);

    $candidate->delete();

    Session::flash('flash_message', __('recruiter_panel.formation_removed'));

    return redirect()->route('recruiterIndex');
  }

}
