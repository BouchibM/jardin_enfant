<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Login;
use App\Models\Parents;

class ParentAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/parent');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:logins',
            'password' => 'required|string|min:6|confirmed',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'nin' => 'required|string|max:255',
            'entreprise' => 'required|string|max:255',
            'direction' => 'required|string|max:255',
            'telephone_poste' => 'required|string|max:255',
            'telephone_domicile' => 'required|string|max:255',
            'telephone_portable' => 'required|string|max:255',
            'situation_familiale' => 'required|string|max:255',
            'nombre_enfants' => 'required|integer',
            'type' => 'required|string|in:père,mère,tuteur,tutrice', // Ajoutez cette validation
        ]);

        $parent = Parents::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'profession' => $request->profession,
            'nin' => $request->nin,
            'entreprise' => $request->entreprise,
            'direction' => $request->direction,
            'telephone_poste' => $request->telephone_poste,
            'telephone_domicile' => $request->telephone_domicile,
            'telephone_portable' => $request->telephone_portable,
            'situation_familiale' => $request->situation_familiale,
            'nombre_enfants' => $request->nombre_enfants,
            'type' => $request->type, // Sauvegardez ce champ
        ]);

        Login::create([
            'parent_id' => $parent->id,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('Login');
    }
}