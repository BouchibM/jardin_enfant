<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ParentsController extends Controller
{
  public function index()
  {
    $parents = Parents::all();
    return view('parent.parentList', compact('parents'));
  }
//------------------------------------------------------------------
  public function dashboard()
    {
        // Récupérer l'utilisateur authentifié
        $user = Auth::user();

        // Vérifiez que l'utilisateur est lié à un parent
        if ($user) {
            if ($user->parent) {
                $parent = $user->parent;
            } else {
                return redirect()->route('Login')->withErrors('L\'utilisateur n\'est pas associé à un parent.');
            }
        } else {
            return redirect()->route('Login')->withErrors('Utilisateur non authentifié.');
        }

        return view('layouts.sidebarUser', compact('parent'));
    }
}