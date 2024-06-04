<?php

namespace App\Http\Controllers;

use App\Models\Reinscription;
use App\Models\Enfant;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReinscriptionController extends Controller
{
    public function index()
    {
        $parent = Auth::user()->parent;
        $reinscriptions = Reinscription::where('parent_id', $parent->id)
                                    ->with(['enfant.region', 'enfant.jardin', 'enfant.section', 'newSection'])
                                    ->get();
        return view('utilisateurParent.reinscription.reinscriptionList', compact('reinscriptions', 'parent'));
    }

    public function view_ajt()
    {
        $parent = Auth::user()->parent;
        $enfants = Enfant::where('parent_id', $parent->id)
                        ->whereDoesntHave('reinscriptions', function($query) {
                            $query->whereIn('status', ['approved', 'rejected', 'payment_verification_pending']);
                        })
                        ->with(['region', 'jardin', 'section'])
                        ->get();

        $reinscription = Reinscription::where('parent_id', $parent->id)
                                      ->whereIn('status', ['pending', 'approved'])
                                      ->first();

        // Calcul du montant à payer
        $approvedCount = Reinscription::where('parent_id', $parent->id)
                                      ->where('status', 'approved')
                                      ->count();
        $amount = 20000; // Tarif plein pour le premier enfant
        if ($approvedCount == 2) {
            $amount = 10000; // Réduction de 50% pour le deuxième enfant
        } elseif ($approvedCount == 3) {
            $amount = 15000; // Réduction de 25% pour le troisième enfant
        }

        return view('utilisateurParent.reinscription.ajouterReinscription', compact('enfants', 'parent', 'reinscription', 'amount'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'enfant' => 'required|exists:enfants,id',
            'pay_slip' => 'required|file|mimes:pdf,jpg,png',
        ]);

        $enfant = Enfant::find($request->enfant);

        // Déterminer la section supérieure
        $currentSection = $enfant->section;
        $newSection = null;

        if ($currentSection->nom == 'très petite section') {
            $newSection = Section::where('nom', 'petite section')->first();
        } elseif ($currentSection->nom == 'petite section') {
            $newSection = Section::where('nom', 'moyenne section')->first();
        } elseif ($currentSection->nom == 'moyenne section') {
            $newSection = Section::where('nom', 'grande section')->first();
        } elseif ($currentSection->nom == 'grande section') {
            // Pas de section supérieure disponible
            $newSection = $currentSection;
        }

        $reinscription = new Reinscription();
        $reinscription->parent_id = Auth::id();
        $reinscription->enfant_id = $request->enfant;
        $reinscription->pay_slip = $request->file('pay_slip')->store('pay_slips');
        $reinscription->status = 'pending';
        $reinscription->new_section_id = $newSection->id;
        $reinscription->save();

        return redirect()->route('reinscription.index')->with('success', 'Votre demande est envoyée avec succès et va être traitée.');
    }

    public function edit($id)
    {
        $reinscription = Reinscription::findOrFail($id);
        return view('utilisateurParent.reinscription.ajouterReinscription', compact('reinscription'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'transaction_number' => 'required|string',
            'payment_slip' => 'required|file|mimes:pdf,jpg,png',
        ]);

        $reinscription = Reinscription::findOrFail($id);
        $reinscription->transaction_number = $request->transaction_number;
        $reinscription->payment_slip = $request->file('payment_slip')->store('payment_slips');
        $reinscription->status = 'payment_verification_pending';
        $reinscription->save();

        return redirect()->route('reinscription.index')->with('success', 'Votre paiement est en cours de vérification.');
    }
}