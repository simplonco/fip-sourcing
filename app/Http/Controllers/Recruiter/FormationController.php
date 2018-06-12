<?php

namespace App\Http\Controllers\Recruiter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Formation;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;


class FormationController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function show($id) {
   $formation = Formation::findOrFail($id);
   $today = Carbon::now(2);
   return view('trainings.show', compact(['formation', 'today']));
  }

  public function recruiterIndex()
  {

    $former = Auth::user();

    return view('applicants.formationList', ['former'=>$former]);
  }

  public function recruiterHome(){
      return view('home', ['roleUser' => 'recruiter']);
  }

  public function recruiterFormations(){
      $trainer = Auth::user();
      return view('trainings.formations', compact('trainer'));
  }

  public function sendMail(){
      return view('recruiter.sendMail');
  }

  public function recruiterFormationCreate(){
      return view('recruiter.formationCreate');
  }
  public function recruiterFormationSave(Request $request){

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

    Session::flash('flash_message', __('recruiter_panel.formation_updated'));

    return Redirect()->route('recruiterIndex');
  }



}
