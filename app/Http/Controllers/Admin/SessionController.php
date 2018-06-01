<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Session;
use App\Models\Formation;

class SessionController extends Controller
{

    public function create($id)
    {
        return view('admin.formation.session.createUpdate', ['adminSessions' => 'create', 'id' =>$id]);
    }

    public function save(Request $request){

        $session = [
            'city' => $request->input('city'),
            'year' => $request->input('year'),
            'begin_session' => $request->input('begin_session'),
            'end_session' => $request->input('end_session'),
            'application_start_date' =>$request->input('application_start_date'),
            'application_end_date' => $request->input('application_end_date'),
            'formation_id'=> $request->input('id')
        ];
        $session->formation()->save($request->input('id'));
        Session::create($session);



        Session::flash('flash_message', __('la session a bien été ajoutée'));

        return redirect()->route('formationList');
    }

}
