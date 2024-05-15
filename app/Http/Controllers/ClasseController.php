<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Region;

use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function index()
    {
        $classes = Classe::all();
        return View('classe.classeList', compact('classes'));
    }
    public function view_ajt()
    {
        return view('classe.ajouterclasse');
    }
    public function create(Request $request)
    {
            $request->validate([
                'nom' => ['required', 'regex:/^[a-zA-Z\s\-]+$/', 'unique:region'],
                'emplacement' => 'required',
            ]);

            $region = Region::create([
                'nom' => $request->nom,
                'emplacement' => $request->emplacement,
            ]);

            return redirect()->route('region.view')->with('status', 'Region ajouté avec succès');
        
    }
}