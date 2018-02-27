<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use User;
use Config;
use App\Models\Role;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;


class CandidateController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function list(Request $request)
  {

    $roleId = Config::get('role_constants.roles.learner');
    $candidates = User::whereHas('roles', function ($q) use ($roleId) {
      $q->where('role_id', $roleId);
    })->get();

    return view('admin.candidate.list', ['candidates'=>$candidates]);
  }

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return view('admin.candidate.list');
  }


  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('admin.candidate.create');
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
      'last_name' => 'required|max:255',
      'first_name' => 'required',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|min:6|confirmed',
    ]);

    $user = [
      'last_name' => $request->input('last_name'),
      'first_name' => $request->input('first_name'),
      'email' => $request->input('email'),
      'password' => bcrypt($request->input('password'))
    ];

    $created_user = User::create($user);
    $created_user->roles()->attach(Role::where('name', 'candidate')->first());

    $created_user->save();

    Session::flash('flash_message', __('admin_panel.candidate_created'));

    return redirect()->route('candidateList');
  }



  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $candidate = User::findOrFail($id);
    return view('admin.candidate.show', ['candidate'=>$candidate]);
  }



  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $candidate = User::findOrFail($id);

    return view('admin.candidate.edit', ['candidate'=>$candidate]);
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
    $candidate = User::findOrFail($id);

    $this->validate($request, [
      'last_name' => 'required|max:255',
      'first_name' => 'required',
      'email' => 'required|string|email|max:255'
    ]);

    $input = $request->all();

    $candidate->last_name = $input['last_name'];
    $candidate->first_name = $input['first_name'];
    $candidate->email = $input['email'];
    $candidate->save();

    Session::flash('flash_message', __('admin_panel.candidate_updated'));

    return redirect()->route('candidateList');
  }



  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $candidate = User::findOrFail($id);

    $candidate->delete();

    Session::flash('flash_message', __('admin_panel.candidate_removed'));

    return redirect()->route('candidateList');
  }
}
