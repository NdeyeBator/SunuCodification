<?php

namespace App\Http\Controllers\Auth;

use App\Models\Etudiant;
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
    protected $redirectTo = '/accueil1';

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
            'numeroEtudiant' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'nomEtudiant' => 'required|string|max:255',
            'prenomEtudiant' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'departement_id' => 'required|string|max:255',
            'formation_id' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return Etudiant::create([
            'numeroEtudiant' => $data['numeroEtudiant'],
            'email' => $data['email'],
            'nomEtudiant' => $data['nomEtudiant'],
            'prenomEtudiant' => $data['prenomEtudiant'],
            'genre' => $data['genre'],
            'departement_id' => $data['departement_id'],
            'formation_id' => $data['formation_id'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
