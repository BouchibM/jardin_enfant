<?php

namespace App\Http\Controllers;
use App\Models\Jardin;
use Illuminate\Http\Request;

class JardinController extends Controller
{
    public function index()
    {
        $jardins=jardin::all();
        return view('jardin.jardinList', compact('jardins'));}
        public function view_ajt()
        {
            return view('jardin.ajouterJardin');
        }
        public function create(Request $request)
        {
           
                $request->validate([
                    'nom' => ['required', 'regex:/^[a-zA-Z\s\-]+$/', 'unique:jardin'], 
                    'emplacement' => 'required',
                ]);
        
                $jardin = Jardin::create([
                    'nom' => $request->nom, 
                    'emplacement' => $request->emplacement,
                ]);
        
                return redirect()->route('jardin.view')->with('status', 'Jardin ajouté avec succès');
            }
            public function edit($id)
            {
                $jardin = Jardin::findOrFail($id);
                return view('jardin.modifierJardin', compact('jardin'));
            }
        
            public function update(Request $request, $id)
            {
                $request->validate([
                    'Nom' => ['required', 'regex:/^[a-zA-Z\s\-]+$/'],
                    'Emplacement' => 'required',
                    'Statue' => 'required',
                ]);
        
                $jardin = Jardin::findOrFail($id);
                $jardin->update([
                    'nom' => $request->Nom,
                    'emplacement' => $request->Emplacement,
                    'statue' => $request->Statue,
                ]);
                return redirect()->route('jardin.index')->with('status', 'Jardin modifier avec succès');
        
            }
           
    }