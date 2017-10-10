<?php

namespace App\Http\Controllers\Candidate;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Formation;
use App\Pro_experience;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class CandidateController extends Controller
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
  *Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    // $form=Form::All();
    // dd($form);

    return redirect('/formCivil');
  }

  /**
  *Choose a formation
  *
  * @return \Illuminate\Http\Response
  */
  public function chooseFormation()
  {
    $today = Carbon::today()->toDateString();
    // dd(Formation::All());
    $formations = Formation::whereDate('begin_session', '<=', $today)
    ->whereDate('end_session', '>=', $today)->get();

    return view('candidate.formation', ['formations'=>$formations]);
  }

  /**
  * Add a formation for given candidate
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function storeFormation($id, Request $request)
  {
    $candidate = Auth::user();

    $formation = Formation::where('id', $id)->first();

    $candidate->formations()->sync($formation);
    $candidate->save();
    Session::flash('flash_message', __('candidate_panel.success'));

    return redirect()->route('home');
  }

  /**
  * Show the form for editing the availability.
  *
  * @return \Illuminate\Http\Response
  */
  public function chooseOperationnal()
  {
    $candidate = Auth::user();

    return view('candidate.operationnal', ['candidate'=>$candidate]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function storeOperationnal(Request $request)
  {
    $candidate = Auth::user();

    $validation_rules = [
      'availability' => 'nullable|max:255',
      'efforts' => 'nullable|string|max:255',
      'computers' => 'nullable|string|max:255',
      'heard_of' => 'nullable|string|max:255',
    ];

    $validator = Validator::make($request->all(), $validation_rules);

    if ($validator->fails())
    {
      return redirect()->back()->withInput(Input::all())->withErrors($validator->errors());
    }

    $candidate->availability = $request->availability;
    $candidate->efforts = $request->efforts;
    $candidate->computers = $request->computers;
    $candidate->heard_of = $request->heard_of;

    $candidate->operationnal_ok = $candidate->is_operationnal_ok();

    $candidate->save();
    Session::flash('flash_message', __('candidate_panel.success'));

    return redirect()->route('home');
  }

  /**
  * Show the form for editing the personal infos.
  *
  * @return \Illuminate\Http\Response
  */
  public function chooseAdministrative()
  {
    $candidate = Auth::user();

    return view('candidate.administrative', ['candidate'=>$candidate]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function storeAdministrative(Request $request)
  {
    $candidate = Auth::user();

    $validation_rules = [
      'nationality' => 'nullable|string|max:255',
      'birth_date' => 'nullable|date',
      'gender' => 'nullable|string|max:255',
      'phone' => 'nullable|string|max:50',
      'postal_code' => 'nullable|string|max:255',
      'city' => 'nullable|string|max:255',
      'address' => 'nullable|string|max:255',
      'status' => 'nullable|string|max:255',
      'number_pole_emploi' => 'nullable|string|max:20',
      'pole_emploi' => 'nullable|string|max:255',
      'number_social_security' => 'nullable|string|max:20',
      'obtained_diploma' => 'nullable|string|max:255',
      'cdd' => 'nullable|date',
    ];

    $validator = Validator::make($request->all(), $validation_rules);

    if ($validator->fails())
    {
      return redirect()->back()->withInput(Input::all())->withErrors($validator->errors());
    }

    $candidate->nationality = $request->nationality;
    $candidate->birth_date = $request->birth_date;
    $candidate->gender = $request->gender;
    $candidate->phone = $request->phone;
    $candidate->postal_code = $request->postal_code;
    $candidate->city = $request->city;
    $candidate->address = $request->address;
    $candidate->status = $request->status;
    $candidate->number_pole_emploi = $request->number_pole_emploi;
    $candidate->pole_emploi = $request->pole_emploi;
    $candidate->number_social_security = $request->number_social_security;
    $candidate->obtained_diploma = $request->obtained_diploma;
    $candidate->cdd = $request->cdd;

    $candidate->save();
    Session::flash('flash_message', __('candidate_panel.success'));

    return redirect()->route('home');
  }


  /**
  * Show the form for editing the programming experience.
  *
  * @return \Illuminate\Http\Response
  */
  public function chooseExperience()
  {
    $candidate = Auth::user();

    return view('candidate.experience', ['candidate'=>$candidate]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function storeExperience(Request $request)
  {
    $candidate = Auth::user();

    $validation_rules = [
      'experience_programming' => 'nullable|string|max:255',
      'course' => 'nullable|string|max:255',
      'english' => 'nullable|string',
      'today' => 'nullable|string|max:300',
    ];

    $validator = Validator::make($request->all(), $validation_rules);

    if ($validator->fails())
    {
      return redirect()->back()->withInput(Input::all())->withErrors($validator->errors());
    }

    $candidate->experience_programming = $request->experience_programming;
    $candidate->course = $request->course;
    $candidate->english = $request->english;
    $candidate->today = $request->today;
    $candidate->save();
    Session::flash('flash_message', __('candidate_panel.success'));

    return redirect()->route('home');
  }


  /**
  * Show the form for editing the profile.
  *
  * @return \Illuminate\Http\Response
  */
  public function chooseCoding()
  {
    $candidate = Auth::user();

    return view('candidate.coding', ['candidate'=>$candidate]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function storeCoding(Request $request)
  {
    $candidate = Auth::user();

    $validation_rules = [
      'coding' => 'nullable|string|max:255',
      'profiles' => 'nullable|string|max:255',
    ];

    $validator = Validator::make($request->all(), $validation_rules);

    if ($validator->fails())
    {
      return redirect()->back()->withInput(Input::all())->withErrors($validator->errors());
    }

    // Insert/update profiles in BDD
    $candidate->coding = $request->coding;
    $candidate->profiles = $request->profiles;

    // Finally : save
    $candidate->save();
    Session::flash('flash_message', __('candidate_panel.success'));

    return redirect()->route('home');
  }

  /**
  * Show the form for editing the hero.
  *
  * @return \Illuminate\Http\Response
  */
  public function chooseProjection()
  {
    $candidate = Auth::user();

    return view('candidate.projection', ['candidate'=>$candidate]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function storeProjection(Request $request)
  {
    $candidate = Auth::user();

    $validation_rules = [
      'hero' => 'nullable|string|max:255',
      'dev_qualities' => 'nullable|string|max:255',
      'personal_goal' => 'nullable|string|max:255',
      'dev_point' => 'nullable|string|max:255',
      'superpower' => 'nullable|string|max:255',
    ];

    $validator = Validator::make($request->all(), $validation_rules);

    if ($validator->fails())
    {
      return redirect()->back()->withInput(Input::all())->withErrors($validator->errors());
    }

    $candidate->hero = $request->hero;
    $candidate->dev_qualities = $request->dev_qualities;
    $candidate->personal_goal = $request->personal_goal;
    $candidate->dev_point = $request->dev_point;
    $candidate->superpower = $request->superpower;
    $candidate->save();


    Session::flash('flash_message', __('candidate_panel.success'));

    return redirect()->route('home');
  }

  /**
  * Show the form for sending the application.
  *
  * @return \Illuminate\Http\Response
  */
  public function confirmSendApplication()
  {
    $candidate = Auth::user();
    $today = Carbon::today()->toDateString();
    if($candidate->formations()->first()->begin_session > $today){
      Session::flash('flash_message', __('candidate_panel.too_early'));
      return redirect()->route('home');
    } else if($candidate->formations()->first()->end_session < $today){
      Session::flash('flash_message', __('candidate_panel.too_late'));
      return redirect()->route('home');
    }

    return view('candidate.confirm_send_application', ['candidate'=>$candidate]);
  }

  /**
  * Sending the application
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function sendApplication(Request $request)
  {
    $candidate = Auth::user();

    $candidate->application_sent = true;
    $candidate->save();
    Session::flash('flash_message', __('candidate_panel.sent_success'));

    return redirect()->route('home');
  }

}
