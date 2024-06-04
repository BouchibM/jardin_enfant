<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transfer;

class GestionnaireTransfertController extends Controller
{
    public function index()
    {
        $transfers = Transfer::with(['enfant', 'ancienneRegion', 'ancienJardin', 'nouvelleRegion', 'nouveauJardin'])
                             ->where('status', 'pending')
                             ->get();

        return view('gestionnaire.transfert.index', compact('transfers'));
    }

    public function accept($id)
    {
        $transfer = Transfer::findOrFail($id);
        $transfer->status = 'accepted';
        $transfer->save();

        return redirect()->route('gestionnaire.transfert.index')->with('success', 'Transfert accepté avec succès.');
    }

    public function reject(Request $request, $id)
    {
        $request->validate([
            'motif_rejet' => 'required|string',
        ]);

        $transfer = Transfer::findOrFail($id);
        $transfer->status = 'rejected';
        $transfer->motif_rejet = $request->motif_rejet;
        $transfer->save();

        return redirect()->route('gestionnaire.transfert.index')->with('success', 'Transfert rejeté avec succès.');
    }
}
