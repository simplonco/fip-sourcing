<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'lastName' => 'required|string|max:255',
            'firstName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'lastName' => $data['lastName'],
            'firstName' => $data['firstName'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'birth_date' => $data['birth_date'],
            'native_country' => $data['native_country'],
            'nationality' => $data['nationality'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'social_status' => $data['social_status'],
            'number_pole_emploie' => $data['number_pole_emploie'],
            'number_social_security' => $data['number_social_security'],
            'study' => $data['study'],
            'experience_programming' => $data['experience_programming'],
            'what_heros' => $data['what_heros'],
            'hack_storie' => $data['hack_storie'],
            'course' => $data['course'],
            'english' => $data['english'],
            'motivation' => $data['motivation'],
            'super_power' => $data['super_power'],
            'codecademy_profile' => $data['codecademy_profile'],
            'openclassroom_profile' => $data['openclassroom_profile'],
            'other_profile' => $data['other_profile'],
            'availability' => $data['availability'],
            'constraints' => $data['constraints'],
            'notoriety' => $data['notoriety'],
        ]);
        $user->roles()->sync(Role::where('slug', 'learner')->first());
        return $user;
    }
}
