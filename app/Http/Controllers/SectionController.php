<?php

namespace App\Http\Controllers;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::all();
        return View('section.sectionList', compact('sections'));
    }
    public function view_ajt()
    {
        return view('section.ajouterSection');
    }
    public function create(Request $request)
    {
        $request->validate([
            'Nom' => 'required|alpha_num',
        ]);
        $section = Section::create([
            'nom' => $request->Nom,
        ]);

        return redirect()->route('section.index')->with('status', 'Section ajouté avec succès');
    }
    public function edit($id)
    {
        $section = Section::findOrFail($id);
        return view('section.modifierSection', compact('section'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Nom' => 'required|alpha_num',
           
        ]);

        $section = Section::findOrFail($id);
        $section->update([
            'nom' => $request->Nom,
        ]);
        return redirect()->route('section.index')->with('status', 'Section modifier avec succès');

    }
    public function destroy($id)
    {
        $section = Section::findOrFail($id);
        $section->delete();
        return redirect()->route('section.index')->with('status', 'Section supprimer avec succès');
    }
}