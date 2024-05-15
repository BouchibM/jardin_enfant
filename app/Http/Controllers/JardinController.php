<?php

namespace App\Http\Controllers;
use App\Models\Jardin;
use App\Models\Region;
use Illuminate\Http\Request;


class JardinController extends Controller
{
    public function index()
    {
        $jardins=jardin::all();
        return view('jardin.jardinList', compact('jardins'));
    }

    public function view_ajt()
    {
        $regions = Region::all();
         return view('jardin.ajouterJardin', ['regions' => $regions]);
    }

   

    public function create(Request $request)
    {
        $request->validate([
            'region_id' => 'required',
            'nom'   => ['required', 'regex:/^[a-zA-Z\s\-]+$/', 'unique:jardin'],
            'date_ouverture' => ['required', 'date_format:Y-m-d'],
            'adresse' => 'required',
            'num_agrement'=> 'integer',
            'nature_juridique'  =>['required', 'regex:/Sonatrach/'],
            'poste_amenage'=>'integer',
            'capacite' => 'integer',
            'status' => 'required',
        ]);
        
        $jardin = Jardin::create([
            'region_id' => $request->region_id,
            'nom'=>$request->nom,
            'date_ouverture'=>$request->date_ouverture,
            'adresse' => $request->adresse,
            'num_agrement' => $request->num_agrement,
            'nature_juridique' => $request->nature_juridique,
            'poste_amenage' => $request->poste_amenage,
            'capacite' => $request->capacite,
            'status' => $request->status,
        ]);

        return redirect()->route('jardin.index')->with('status', 'Jardin ajouté avec succès');
    }

    public function edit($id)
    {
        $jardin = Jardin::findOrFail($id);
        return view('jardin.modifierJardin', compact('jardin'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'region_id' => 'required',
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
        $jardin->update($request->all());

        return redirect()->route('jardin.index')->with('status', 'Jardin modifier avec succès');
    }

    public function destroy($id)
    {
        $jardin = Jardin::findOrFail($id);
        $jardin->delete();
        return redirect()->route('jardin.index')->with('status', 'Jardin supprimé avec succès');
    }
}