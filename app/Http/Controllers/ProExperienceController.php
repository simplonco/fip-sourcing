<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\ProExperience;
use Illuminate\Support\Facades\Session;

class ProExperienceController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function list(Request $request)
  {

    $candidate_id = Auth::user()->id;
    $proExperiences = ProExperience::whereHas('user', function ($q) use ($candidate_id) {
      $q->where('user_id', $candidate_id);
    })->get();

    return view('pro_experience.list', ['proExperiences'=>$proExperiences]);
  }

  /**
  * Display a form to create a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('pro_experience.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $this->validate($request, [
      'society_name' => 'required|string|max:255',
      'society_address' => 'required|string|max:500',
      'contract_type' => 'required|string|max:255',
      'contract_duration' => 'required|string|max:255',
      'position_held' => 'required|string|max:255'
    ]);

    $candidate = Auth::user();

    $pro_experience = new ProExperience;
    $pro_experience->society_name = $request->society_name;
    $pro_experience->society_address = $request->society_address;
    $pro_experience->contract_type = $request->contract_type;
    $pro_experience->contract_duration = $request->contract_duration;
    $pro_experience->position_held = $request->position_held;
    $pro_experience->user()->associate($candidate);
    $pro_experience->save();

    Session::flash('flash_message', 'L\'expérience professionnelle a été ajoutée avec succès!');

    return redirect()->route('proExperienceList');
  }



  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $pro_experience = ProExperience::findOrFail($id);

    return view('pro_experience.show', compact('pro_experience'));
  }



  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $pro_experience = ProExperience::findOrFail($id);

    return view('pro_experience.edit')->withProExperience($pro_experience);
  }



  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update($id, Request $request)
  {
    $pro_experience = ProExperience::findOrFail($id);

    $this->validate($request, [
      'society_name' => 'required|string|max:255',
      'society_address' => 'required|string|max:500',
      'contract_type' => 'required|string|max:255',
      'contract_duration' => 'required|string|max:255',
      'position_held' => 'required|string|max:255'
    ]);

    $input = $request->all();

    $pro_experience->fill($input)->save();

    Session::flash('flash_message', 'L\'expérience professionnelle a été modifiée avec succès!');

    return redirect()->route('proExperienceList');
  }



  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $pro_experience = ProExperience::findOrFail($id);

    $pro_experience->delete();

    Session::flash('flash_message', 'L\'expérience professionnelle a été supprimée avec succès!');

    return redirect()->route('proExperienceList');
  }
}
