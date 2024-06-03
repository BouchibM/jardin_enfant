<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Section;
use App\Models\Jardin;
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
        $sections = Section::all();
        $jardins = Jardin::all();
        return view('classe.ajouterclasse', ['sections' => $sections], ['jardins' => $jardins]);
    }
    public function create(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'regex:/^[a-zA-Z\s\-]+$/', 'unique:classes'],
            'capacite' => 'integer',
            'section_id' => 'required',
            'jardin_id' => 'required',
        ]);

        $classe = Classe::create([
            'nom' => $request->nom,
            'capacite' => $request->capacite,
            'section_id' => $request->section_id,
            'jardin_id' => $request->jardin_id,
        ]);

        return redirect()->route('classe.index')->with('status', 'Classe ajouté avec succès');

    }
}