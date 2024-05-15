<?php

namespace App\Http\Controllers;
use App\Models\Structure;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    
       public function index()
        {
    $structures = Structure::all();
    return view('structure.structureList', compact('structures'));
        } 
        public function view_ajt()
        {
            return view('structure.ajouterStruture');
        }
        public function create(Request $request)
        {
    
    
            $request->valcodeate([
                'code' => ['required','unique:code'],
                'Nom' => ['required', 'regex:/^[a-zA-Z\s\-]+$/'],
            ]);
    
            $structure = Structure::create([
                'code'=> $request->Code,
                'nom' => $request->Nom,
            ]);
    
            return redirect()->route('structure.index')->with('status', 'Struture ajouté avec succès');
        }
        public function edit($code)
        {
            $structure = Structure::findOrFail($code);
            return view('structure.modifierStruture', compact('structure'));
        }
    
        public function update(Request $request, $code)
        {
            $request->valcodeate([
                'code' => ['required','unique:code'],
                'Nom' => ['required', 'regex:/^[a-zA-Z\s\-]+$/'],
                
            ]);
    
            $structure = Structure::findOrFail($code);
            $structure->update([
                'code'=> $request->Code,
                'nom' => $request->Nom,
            
            ]);
            return redirect()->route('structure.index')->with('status', 'Struture modifier avec succès');
    
        }
        public function destroy($code)
        {
            $structure = Structure::findOrFail($code);
            $structure->delete();
            return redirect()->route('structure.index')->with('status', 'Struture supprimer avec succès');
        } 
}