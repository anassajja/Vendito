<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class TraitementInscriptionController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'lieu_residence' => 'required',
            'numero_telephone' => 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'date_naissance' => 'date', // removed 'required'
            'sexe' => 'string', // removed 'required'
            'date_inscription' => date('Y-m-d H:i:s'),
        ]);

        // Hash du mot de passe (sécurité)
        $mot_de_passe_hash = Hash::make($request->password);

        // Insertion dans la base de données
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'email' => $request->email,
            'lieu_residence' => $request->lieu_residence,
            'numero_telephone' => $request->numero_telephone,
            'password' => $mot_de_passe_hash,
            'password_confirmation' => $mot_de_passe_hash,
            'date_naissance' => $request->date_naissance,
            'sexe' => $request->sexe,
            'date_inscription' => date('Y-m-d H:i:s')
        ]);
        
        // Redirection vers une page de confirmation ou vers la page de connexion
        return redirect()->route('marketplace');
    }
    
}