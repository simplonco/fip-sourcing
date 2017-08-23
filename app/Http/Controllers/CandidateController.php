<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Formation;
use Illuminate\Support\Facades\Session;

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
    $formations = Formation::All();

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
  * Show the form for editing the hero.
  *
  * @return \Illuminate\Http\Response
  */
  public function chooseHero()
  {
    $candidate = Auth::user();

    return view('candidate.hero', ['candidate'=>$candidate]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function storeHero(Request $request)
  {
    $candidate = Auth::user();

    $this->validate($request, [
      'hero' => 'required|string|max:255',
    ]);

    $candidate->hero = $request->hero;
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
    ]);

    $candidate->experience_programming = $request->experience_programming;
    $candidate->save();

    return redirect()->route('home');
  }


  /**
  * Show the form for editing the availability.
  *
  * @return \Illuminate\Http\Response
  */
  public function chooseAvailability()
  {
    $candidate = Auth::user();

    return view('candidate.availability', ['candidate'=>$candidate]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function storeAvailability(Request $request)
  {
    $candidate = Auth::user();

    $this->validate($request, [
      'availability' => 'required|string|max:255',
      'constraints' => 'required|string|max:255',
      'income' => 'required|string|max:255',
    ]);

    $candidate->availability = $request->availability;
    $candidate->constraints = $request->constraints;
    $candidate->income = $request->income;
    $candidate->save();

    return redirect()->route('home');
  }

  /**
  * Show the form for editing the followup.
  *
  * @return \Illuminate\Http\Response
  */
  public function chooseFollowup()
  {
    $candidate = Auth::user();

    return view('candidate.followup', ['candidate'=>$candidate]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function storeFollowup(Request $request)
  {
    $candidate = Auth::user();

    $candidate->followup_device = $request->followup_device;
    $candidate->sent_by = $request->sent_by;
    $candidate->local_mission = $request->local_mission;
    $candidate->save();

    return redirect()->route('home');
  }

  /**
  * Show the form for editing the hack.
  *
  * @return \Illuminate\Http\Response
  */
  public function chooseHack()
  {
    $candidate = Auth::user();

    return view('candidate.hack', ['candidate'=>$candidate]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function storeHack(Request $request)
  {
    $candidate = Auth::user();

    $this->validate($request, [
      'hack_story' => 'required|string|max:255',
    ]);

    $candidate->hack_story = $request->hack_story;
    $candidate->save();

    return redirect()->route('home');
  }

  /**
  * Show the form for editing the course.
  *
  * @return \Illuminate\Http\Response
  */
  public function chooseCourse()
  {
    $candidate = Auth::user();

    return view('candidate.course', ['candidate'=>$candidate]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function storeCourse(Request $request)
  {
    $candidate = Auth::user();

    $this->validate($request, [
      'course' => 'required|string|max:255',
    ]);

    $candidate->course = $request->course;
    $candidate->save();

    return redirect()->route('home');
  }

  /**
  * Show the form for editing the superpower.
  *
  * @return \Illuminate\Http\Response
  */
  public function chooseSuperpower()
  {
    $candidate = Auth::user();

    return view('candidate.superpower', ['candidate'=>$candidate]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function storeSuperpower(Request $request)
  {
    $candidate = Auth::user();

    $this->validate($request, [
      'super_power' => 'required|string|max:255',
    ]);

    $candidate->super_power = $request->super_power;
    $candidate->save();

    return redirect()->route('home');
  }

  /**
  * Show the form for editing the motivation.
  *
  * @return \Illuminate\Http\Response
  */
  public function chooseMotivation()
  {
    $candidate = Auth::user();

    return view('candidate.motivation', ['candidate'=>$candidate]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function storeMotivation(Request $request)
  {
    $candidate = Auth::user();

    $this->validate($request, [
      'motivation' => 'required|string|max:255',
    ]);

    $candidate->motivation = $request->motivation;
    $candidate->save();

    return redirect()->route('home');
  }

  /**
  * Show the form for editing the profile.
  *
  * @return \Illuminate\Http\Response
  */
  public function chooseProfile()
  {
    $candidate = Auth::user();

    return view('candidate.profile', ['candidate'=>$candidate]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function storeProfile(Request $request)
  {
    $candidate = Auth::user();

    $this->validate($request, [
      'codecademy_profile' => 'required|string|max:255',
    ]);

    // Insert/update profiles in BDD
    $candidate->codecademy_profile = $request->codecademy_profile;
    $candidate->openclassroom_profile = $request->openclassroom_profile;
    $candidate->other_profile = $request->other_profile;
    // Insert/update related codecademy badges
    $candidate->codecademy_badges = fetchBadges($candidate->codecademy_profile);

    // Finally : save
    $candidate->save();

    return redirect()->route('home');
  }

  /**
  * Update codecademy_badges
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function refreshBadges()
  {
    $candidate = Auth::user();

    // Update related codecademy badges
    $candidate->codecademy_badges = fetchBadges($candidate->codecademy_profile);

    // Finally : save
    $candidate->save();

    return redirect()->route('home');
  }

  /**
  * Show the form for editing the personal infos.
  *
  * @return \Illuminate\Http\Response
  */
  public function chooseCivil()
  {
    $candidate = Auth::user();

    return view('candidate.civil', ['candidate'=>$candidate]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function storeCivil(Request $request)
  {
    $candidate = Auth::user();

    //TODO : implement validation
    // $this->validate($request, [
    //   'codecademy_profile' => 'required|string|max:255',
    //   'openclassroom_profile' => 'string|max:255',
    //   'other_profile' => 'string|max:255',
    // ]);

    $candidate->civility = $request->civility;
    $candidate->maiden_name = $request->maiden_name;
    $candidate->birth_date = $request->birth_date;
    $candidate->native_city = $request->native_city;
    $candidate->native_country = $request->native_country;
    $candidate->nationality = $request->nationality;
    $candidate->entry_date = $request->entry_date;
    $candidate->marital_status = $request->marital_status;
    $candidate->number_children = $request->number_children;
    $candidate->age_children = $request->age_children;
    $candidate->accomodation = $request->accomodation;
    $candidate->number_social_security = $request->number_social_security;
    $candidate->number_cmu = $request->number_cmu;
    $candidate->end_visit_date = $request->end_visit_date;
    $candidate->address = $request->address;
    $candidate->postal_code = $request->postal_code;
    $candidate->city = $request->city;
    $candidate->phone = $request->phone;
    $candidate->cellphone = $request->cellphone;
    $candidate->emergency_contact = $request->emergency_contact;
    $candidate->emergency_phone = $request->emergency_phone;
    $candidate->save();

    return redirect()->route('home');
  }

  /**
  *Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    //
  }

  /**
  *Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    //
  }

  /**
  *Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
  }

  /**
  *Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    //
  }


  /**
  *Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    //
  }
}
