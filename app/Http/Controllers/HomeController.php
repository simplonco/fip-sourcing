<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Form;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slugUser = Auth::User()->roles->implode('slug');
            $idUser = Auth::User()->id;
        if ($slugUser == 'admin') {
            return Redirect()->route('admin');
        } elseif ($slugUser == 'Can') {
            if (Form::all()->where('user_id', '=', $idUser)->first()) {
                if (Form::all()->where('user_id', '=', $idUser)->first()->statut_form == '0') {
                    return Redirect('formcandidature');
                } else {
                    return Redirect('/confirm');
                }
            } else {
                return Redirect('/formCivil');
            }
        } elseif ($slugUser == 'forma') {
            return Redirect()->route('formateur');
        }
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirmpage()
    {
        return view('confirmInscript');
    }
}
