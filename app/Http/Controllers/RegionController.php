<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RegionController extends Controller
{

    public function index()
    {
        $regions = Region::all();
        return view('region.regionList', compact('regions'));

    }
    public function view_ajt()
    {
        return view('region.ajouterRegion');
    }
    public function create(Request $request)
    {


        $request->validate([
            'Nom' => ['required', 'regex:/^[a-zA-Z\s\-]+$/', 'unique:region'],
            'Emplacement' => 'required',
        ]);

        $region = Region::create([
            'nom' => $request->Nom,
            'emplacement' => $request->Emplacement,
        ]);

        return redirect()->route('region.index')->with('status', 'Region ajouté avec succès');
    }
    public function edit($id)
    {
        $region = Region::findOrFail($id);
        return view('region.modifierRegion', compact('region'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Nom' => ['required', 'regex:/^[a-zA-Z\s\-]+$/'],
            'Emplacement' => 'required',
            'Statue' => 'required',
        ]);

        $region = Region::findOrFail($id);
        $region->update([
            'nom' => $request->Nom,
            'emplacement' => $request->Emplacement,
            'statue' => $request->Statue,
        ]);
        return redirect()->route('region.index')->with('status', 'Region modifier avec succès');

    }
    public function destroy($id)
    {
        $region = Region::findOrFail($id);
        $region->delete();
        return redirect()->route('region.index')->with('status', 'Region supprimer avec succès');
    }
}