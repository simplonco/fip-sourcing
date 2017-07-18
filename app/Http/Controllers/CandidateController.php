<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Form;
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
