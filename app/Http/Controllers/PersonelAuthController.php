<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Utilisateur;
class PersonelAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('Authentification');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'motdepass');

        // Retrieve the user by email
        $user = Utilisateur::where('email', $credentials['email'])->first();

        // Check if the user exists and the provided password matches the hashed password in the database
        if ($user && Hash::check($credentials['motdepass'], $user->motdepass)) {
            // Authenticate the user manually
            Auth::login($user);

            // Redirect based on role
            switch ($user->type_user_id) {
                case 1:
                    return redirect()->route('admin');
                case 2:
                    return redirect()->route('Directrice');
                case 3:
                    return redirect()->route('chefDepartement');
                case 4:
                    return redirect()->route('gestionnaire');
                case 5:
                    return redirect()->route('parent');
                case 6:
                    return redirect()->route('directrice');
                default:
                    return redirect()->route('login');
            }
        }
    

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
            'motdepass' =>'The provided credentials do not match our records.',
        ]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}