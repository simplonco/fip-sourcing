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

  public function recruiterFormationCandidatesShow($formation_id)
  {
    $formation = Formation::findOrFail($formation_id);

    $roleId = 2;
    $candidates = User::whereHas('roles', function ($q) use ($roleId) {
      $q->where('role_id', $roleId);
    })->whereHas('formations', function ($q) use ($formation_id) {
      $q->where('formation_id', $formation_id);
    })->paginate(10);

    return view('recruiter.candidateList', ['candidates'=>$candidates, 'formation'=>$formation]);
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function recruiterFormationShow($id)
  {
    $formation = Formation::findOrFail($id);

    return view('recruiter.formationShow', compact('formation'));
  }



  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function recruiterFormationEdit($id)
  {
    $formation = Formation::findOrFail($id);

    return view('recruiter.formationEdit')->withFormation($formation);
  }



  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function recruiterFormationUpdate($id, Request $request)
  {
    $formation = Formation::findOrFail($id);

    $this->validate($request, [
      'name' => 'required|max:255',
      'description' => 'required|max:255',
      'city' => 'required',
      'year' => 'required',
      'begin_session' => 'required',
      'end_session' => 'required',
    ]);

    $input = $request->all();

    $formation->fill($input)->save();

    Session::flash('flash_message', 'La formation a été modifiée avec succès!');

    return Redirect()->route('recruiterIndex');
  }



}
