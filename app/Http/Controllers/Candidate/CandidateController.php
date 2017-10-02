<?php

namespace App\Http\Controllers\Candidate;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Formation;
use App\Pro_experience;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

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
  *Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
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

    $this->validate($request, [
      'availability' => 'required|string|max:255',
      'efforts' => 'required|string|max:255',
      'computers' => 'required|string|max:255',
      'heard_of' => 'required|string|max:255',
    ]);

    $candidate->availability = $request->availability;
    $candidate->efforts = $request->efforts;
    $candidate->computers = $request->computers;
    $candidate->heard_of = $request->heard_of;
    $candidate->save();

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

    //TODO : implement validation
    // $this->validate($request, [
    //   'codecademy_profile' => 'required|string|max:255',
    //   'openclassroom_profile' => 'string|max:255',
    //   'other_profile' => 'string|max:255',
    // ]);

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

    $this->validate($request, [
      'experience_programming' => 'required|string|max:255',
      'course' => 'required|string|max:255',
      'english' => 'required|string',
      'today' => 'required|string|max:300',
    ]);

    $candidate->experience_programming = $request->experience_programming;
    $candidate->course = $request->course;
    $candidate->english = $request->english;
    $candidate->today = $request->today;
    $candidate->save();

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

    $this->validate($request, [
      'coding' => 'string|max:255',
      'profiles' => 'string|max:255',
    ]);

    // Insert/update profiles in BDD
    $candidate->coding = $request->coding;
    $candidate->profiles = $request->profiles;

    // Finally : save
    $candidate->save();

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

    $this->validate($request, [
      'hero' => 'required|string|max:255',
      'dev_qualities' => 'required|string|max:255',
      'personal_goal' => 'required|string|max:255',
      'dev_point' => 'required|string|max:255',
      'superpower' => 'required|string|max:255',
    ]);

    $candidate->hero = $request->hero;
    $candidate->dev_qualities = $request->dev_qualities;
    $candidate->personal_goal = $request->personal_goal;
    $candidate->dev_point = $request->dev_point;
    $candidate->superpower = $request->superpower;
    $candidate->save();

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

    return redirect()->route('home');
  }

}
