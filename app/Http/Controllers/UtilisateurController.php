<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
//     public function index()
//   {
//     $utilisateurs = Utilisateur::all();
//     return view('utilisateur.utilisateurList', compact('utilisateurs'));
//   }
  public function dashboard()
    {
        // Récupérer l'utilisateur authentifié
        $user = Auth::user();

        // Vérifiez que l'utilisateur est lié à un utilisateur
        if ($user) {
            if ($user->utilisateur) {
                $utilisateur = $user->utilisateur;
            } else {
                return redirect()->route('login')->withErrors('L\'utilisateur n\'est pas associé à un utilisateur.');
            }
        } else {
            return redirect()->route('login')->withErrors('Utilisateur non authentifié.');
        }

        return view('layouts.sidebarUser', compact('utilisateur'));
    }
}