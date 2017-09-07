<?php

namespace App\Http\Controllers\Recruiter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RecruiterController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function recruiterIndex()
  {

    $former = Auth::user();

    return view('recruiter.formationList', ['former'=>$former]);
  }

}
