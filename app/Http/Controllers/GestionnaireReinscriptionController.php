<?php

namespace App\Http\Controllers;

use App\Models\Reinscription;
use Illuminate\Http\Request;

class GestionnaireReinscriptionController extends Controller
{
    public function index()
    {
        $reinscriptions = Reinscription::with(['parent', 'enfant.region', 'enfant.jardin'])->get();
        return view('gestionnaire.reinscriptions.index', compact('reinscriptions'));
    }

    public function accept($id)
    {
        $reinscription = Reinscription::findOrFail($id);
        $reinscription->status = 'approved';
        $reinscription->save();

        return redirect()->route('gestionnaire.reinscriptions.index')->with('success', 'Demande approuvée.');
    }

    public function reject(Request $request, $id)
    {
        $request->validate([
            'reason' => 'required|string',
        ]);

        $reinscription = Reinscription::findOrFail($id);
        $reinscription->status = 'rejected';
        $reinscription->rejection_reason = $request->reason;
        $reinscription->save();

        return redirect()->route('gestionnaire.reinscriptions.index')->with('success', 'Demande rejetée.');
    }

    public function verifyPayment(Request $request, $id)
    {
        $reinscription = Reinscription::findOrFail($id);
        $reinscription->status = 'completed';
        $reinscription->save();

        return redirect()->route('gestionnaire.reinscriptions.index')->with('success', 'Paiement vérifié et réinscription complétée.');
    }
}