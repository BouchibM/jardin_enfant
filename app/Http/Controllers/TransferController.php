<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transfer;
use App\Models\Enfant;
use App\Models\Region;
use App\Models\Jardin;
use Illuminate\Support\Facades\Auth;

class TransferController extends Controller
{
    public function index()
    {
        $parent = Auth::user()->parent;
        $transfers = Transfer::where('parent_id', $parent->id)
                             ->with(['ancienneRegion', 'ancienJardin', 'nouvelleRegion', 'nouveauJardin'])
                             ->get();

        return view('utilisateurParent.transferts.transfertList', compact('transfers', 'parent'));
    }

    public function view_ajt()
    {
        $parent = Auth::user()->parent;
        $enfants = Enfant::where('parent_id', $parent->id)->get();
        $regions = Region::all();
        $jardins = Jardin::all();

        return view('utilisateurParent.transferts.ajouterTransfert', compact('enfants', 'regions', 'jardins', 'parent'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'child_id' => 'required|exists:enfants,id',
            'motif' => 'required|string|max:255',
            'raison' => 'required|string',
            'region' => 'required|exists:region,id',
            'jardin' => 'required|exists:jardin,id',
        ]);

        $parent = Auth::user()->parent;
        $enfant = Enfant::findOrFail($request->child_id);

        $transfer = Transfer::create([
            'parent_id' => $parent->id,
            'enfant_id' => $enfant->id,
            'old_region_id' => $enfant->region_souhaitee,
            'old_jardin_id' => $enfant->jardin_souhaite,
            'new_region_id' => $request->region,
            'new_jardin_id' => $request->jardin,
            'motif' => $request->motif,
            'raison' => $request->raison,
        ]);

        // Update the child's region and garden
        $enfant->update([
            'region_souhaitee' => $request->region,
            'jardin_souhaite' => $request->jardin,
        ]);

        return redirect()->route('transfert.index')->with('success', 'Demande de transfert créée avec succès.');
    }
}
