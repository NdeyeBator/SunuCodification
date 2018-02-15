<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request) {


      if(Auth::attempt([
        'email' => $request->email,
        'password' => $request->password
      ]))
      {
        $etudiant = Etudiant::where('email', $request->email)->first();

        if($etudiant->is_admin())
        {
          return redirect()->route('accueil');
        }
        return redirect()->route('accueil1');
      }
      return redirect()->back();
    }
}
