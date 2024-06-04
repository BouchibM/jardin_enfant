<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;

class GestionnaireController extends Controller
{
    public function index()
    {
        $inscriptions = Inscription::with(['enfant.parent', 'enfant.region', 'enfant.jardin', 'enfant.questions'])->get();

        return view('gestionnaire.inscriptions.index', compact('inscriptions'));
    }

    public function accept($id)
    {
        $inscription = Inscription::findOrFail($id);
        $inscription->status = 'accepted';
        $inscription->save(); // updated_at sera mis à jour automatiquement

        return redirect()->route('gestionnaire.inscriptions.index')->with('success', 'Inscription acceptée avec succès.');
    }

    public function reject(Request $request, $id)
    {
        $request->validate([
            'motif_rejet' => 'required|string|max:255',
        ]);

        $inscription = Inscription::findOrFail($id);
        $inscription->status = 'rejected';
        $inscription->motif_rejet = $request->motif_rejet;
        $inscription->save(); // updated_at sera mis à jour automatiquement

        return redirect()->route('gestionnaire.inscriptions.index')->with('success', 'Inscription rejetée avec succès.');
    }
}
