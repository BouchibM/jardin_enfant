<?php

namespace App\Http\Controllers;
use App\Models\Fonction;
use Illuminate\Http\Request;

class FonctionController extends Controller
{
    public function index()
    {
        $fonctions = Fonction::all();
        return View('fonction.fonctionList', compact('fonctions'));
    }
    public function view_ajt()
        {
            return view('fonction.ajouterFonction');
        }
        public function create(Request $request)
        {
            
                $request->validate([
                    'nom' => ['required', 'regex:/^[a-zA-Z\s\-]+$/', 'unique:fonction'], 
                    'emplacement' => 'required',
                ]);
        
                $fonction = Fonction::create([
                    'nom' => $request->nom, 
                    'emplacement' => $request->emplacement,
                ]);
        
                return redirect()->route('fonction.view')->with('status', 'Fonction ajouté avec succès');
            
    }
    public function edit($code)
    {
        $fonction = Fonction::findOrFail($code);
        return view('fonction.modifierFonction', compact('fonction'));
    }

    public function update(Request $request, $code) 
    {
        $request->validate([
            'code' => ['required', 'regex:/^[a-zA-Z0-9\s\-]+$/', 'unique:fonction'],
            'Nom' => ['required', 'regex:/^[a-zA-Z\s\-]+$/'],
            'echelle' => 'required|numeric',
            'structure' => 'required',
        ]);

        $fonction = Fonction::findOrFail($code);
        $fonction->update([
            'nom' => $request->Nom,
            'emplacement' => $request->Emplacement,
            'statue' => $request->Statue,
        ]);
        return redirect()->route('fonction.index')->with('status', 'Fonction modifier avec succès');

    }
   
}