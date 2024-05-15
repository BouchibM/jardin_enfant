<?php

namespace App\Http\Controllers;
use App\Models\Classe;
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
        return view('region.ajouterRegion');
    }
    public function create(Request $request)
    {
        try {
            $request->validate([
                'nom' => ['required', 'regex:/^[a-zA-Z\s\-]+$/', 'unique:region'], 
                'emplacement' => 'required',
            ]);
    
            $region = Region::create([
                'nom' => $request->nom, 
                'emplacement' => $request->emplacement,
            ]);
    
            return redirect()->route('region.view')->with('status', 'Region ajouté avec succès');
        } catch (\Exception $e) {
            Log::error('Error creating region: ' . $e->getMessage());
            return back()->withInput()->withErrors(['error' => 'Une erreur s\'est produite lors de l\'ajout de la région. Veuillez réessayer.']);
        }
}
}