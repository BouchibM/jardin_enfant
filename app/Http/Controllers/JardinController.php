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
                    'REGION' => 'required',
                    'nom'   => ['required', 'regex:/^[a-zA-Z\s\-]+$/', 'unique:jardin'],
                    'date_ouverture' => ['required', 'date_format:Y-m-d'],
                    'adresse' => 'required',
                    'num_agrement'=> 'integer',
                    'nature_juridique',
                    'poste_amenage'=>'integer',
                    'capacite' => 'integer',
                    'status' => 'required',
                ]);
        
                $jardin = Jardin::create([
                    'REGION' => $request->Region,
                    'nom'=>$request->nom,
                    'date_ouverture'=>$request->deskripsi,
                    'adresse',
                    'num_agrement',
                    'nature_juridique' => ['required', 'regex:/Sonatrach/'],
                    'poste_amenage',
                    'capacite',
                    'status',
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
                    'REGION' => 'required',
                    'nom'   => ['required', 'regex:/^[a-zA-Z\s\-]+$/', 'unique:jardin'],
                    'date_ouverture' => ['required', 'date_format:Y-m-d'],
                    'adresse' => 'required',
                    'num_agrement'=> 'integer',
                    'nature_juridique' => ['required', 'regex:/Sonatrach/'],
                    'poste_amenage' => 'integer',
                    'capacite' => 'integer',
                    'status' => 'required',
                ]);
        
                $jardin = Jardin::findOrFail($id);
                $jardin->update([
                    'REGION',
                    'nom',
                    'date_ouverture',
                    'adresse',
                    'num_agrement',
                    'nature_juridique',
                    'poste_amenage',
                    'capacite',
                    'status',
                ]);
                return redirect()->route('jardin.index')->with('status', 'Jardin modifier avec succès');
        
            }
           
    }