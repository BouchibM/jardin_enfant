<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;
use App\Models\Enfant;
use App\Models\Question;
use App\Models\Region;
use App\Models\Jardin;
use App\Models\Section;
use App\Models\Classe;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class InscriptionController extends Controller
{
    public function index()
    {
        $parent = Auth::user()->parent;
        $inscriptions = Inscription::where('parent_id', $parent->id)->with(['enfant.region', 'enfant.jardin'])->get();

        return view('utilisateurParent.inscription.inscriptionList', compact('inscriptions', 'parent'));
    }

    public function view_ajt()
    {
        $parent = Auth::user()->parent;
        $regions = Region::all();
        $jardins = Jardin::all();
        $type_parent = $parent->type; // Récupérer le type de parent

        return view('utilisateurParent.inscription.ajouterInscription', compact('regions', 'jardins', 'parent', 'type_parent'));
    }

    public function create(Request $request)
{
    Log::info('Début de la méthode create.');

    try {
        $parent = Auth::user()->parent;

        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'groupe_sanguin' => 'required|string|max:3',
            'adresse_domicile' => 'required|string|max:255',
            'region_souhaitee' => 'required|integer|exists:region,id',
            'jardin_souhaite' => 'required|integer|exists:jardin,id',
            'extrait_naissance' => 'file|mimes:pdf|max:2048',
            'certificat_vaccination' => 'file|mimes:pdf|max:2048',
            'certificat_medical' => 'file|mimes:pdf|max:2048',
            'photo_identite' => 'file|mimes:jpg,jpeg,png|max:2048',
            'certificat_justice' => 'file|mimes:pdf|max:2048',
            'age_marche' => 'nullable|integer',
            'age_propre_jour' => 'nullable|integer',
            'age_propre_nuit' => 'nullable|integer',
            'age_parle' => 'nullable|integer',
            'premier_mot' => 'nullable|string|max:255',
            'conditions' => 'nullable|string',
            'collectivite_avant' => 'nullable|boolean',
            'maladies' => 'nullable|string',
            'operations' => 'nullable|string',
            'nombre_freres_soeurs' => 'nullable|integer',
            'condition_habitation' => 'nullable|string|max:255',
            'chambre_individuelle' => 'nullable|boolean',
            'partage_chambre_avec' => 'nullable|string|max:255',
            'mange_bien' => 'nullable|boolean',
            'dort_bien' => 'nullable|boolean',
            'activites_maison' => 'nullable|string',
            'volontaire' => 'nullable|boolean',
            'turbulent' => 'nullable|boolean',
            'observations' => 'nullable|string',
        ]);

        Log::info('Validation passée.');

        $parent_id = $parent->id;
        $type_parent = $parent->type;

        $age = Carbon::parse($request->date_naissance)->age;

        // Vérification des conditions d'âge et de type de parent
        if (($type_parent != 'mère' && ($age < 3 || $age > 5)) || ($type_parent == 'mère' && ($age < 2 || $age > 5))) {
            return back()->withErrors(['error' => 'L\'âge de l\'enfant ne correspond pas aux critères pour le type de parent.']);
        }

        Log::info('Conditions d\'âge et de type de parent vérifiées.');

        $enfant = Enfant::create([
            'parent_id' => $parent_id,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'date_naissance' => $request->date_naissance,
            'groupe_sanguin' => $request->groupe_sanguin,
            'adresse_domicile' => $request->adresse_domicile,
            'region_souhaitee' => $request->region_souhaitee,
            'jardin_souhaite' => $request->jardin_souhaite,
            'extrait_naissance' => $request->file('extrait_naissance') ? $request->file('extrait_naissance')->store('documents') : null,
            'certificat_vaccination' => $request->file('certificat_vaccination') ? $request->file('certificat_vaccination')->store('documents') : null,
            'certificat_medical' => $request->file('certificat_medical') ? $request->file('certificat_medical')->store('documents') : null,
            'photo_identite' => $request->file('photo_identite') ? $request->file('photo_identite')->store('documents') : null,
            'certificat_justice' => $request->file('certificat_justice') ? $request->file('certificat_justice')->store('documents') : null,
        ]);

        Log::info('Enfant créé avec succès. ID: ' . $enfant->id);

        Question::create([
            'enfant_id' => $enfant->id,
            'age_marche' => $request->age_marche,
            'age_propre_jour' => $request->age_propre_jour,
            'age_propre_nuit' => $request->age_propre_nuit,
            'age_parle' => $request->age_parle,
            'premier_mot' => $request->premier_mot,
            'conditions' => $request->conditions,
            'collectivite_avant' => $request->collectivite_avant,
            'maladies' => $request->maladies,
            'operations' => $request->operations,
            'nombre_freres_soeurs' => $request->nombre_freres_soeurs,
            'condition_habitation' => $request->condition_habitation,
            'chambre_individuelle' => $request->chambre_individuelle,
            'partage_chambre_avec' => $request->partage_chambre_avec,
            'mange_bien' => $request->mange_bien,
            'dort_bien' => $request->dort_bien,
            'activites_maison' => $request->activites_maison,
            'volontaire' => $request->volontaire,
            'turbulent' => $request->turbulent,
            'observations' => $request->observations,
        ]);

        Log::info('Questionnaire ajouté avec succès.');

        Inscription::create([
            'parent_id' => $parent_id,
            'enfant_id' => $enfant->id,
            'status' => 'pending',
            'motif_rejet' => null,
            'updated_at' => null,
        ]);

        Log::info('Inscription créée avec succès.');

        $this->affecterSectionClasse($enfant);

        Log::info('Section et classe affectées.');

        return redirect()->route('inscription.index')->with('success', 'Inscription réussie.');
    } catch (\Exception $e) {
        Log::error('Erreur lors de la création de l\'inscription: ' . $e->getMessage());
        return back()->withErrors(['error' => 'Une erreur est survenue lors de la création de l\'inscription. Veuillez réessayer.']);
    }
}
    private function affecterSectionClasse($enfant)
    {
        $age = Carbon::parse($enfant->date_naissance)->age;

        if ($age == 2) {
            $section = Section::where('nom', 'très petite section')->first();
        } elseif ($age == 3) {
            $section = Section::where('nom', 'petite section')->first();
        } elseif ($age == 4) {
            $section = Section::where('nom', 'moyenne section')->first();
        } elseif ($age == 5) {
            $section = Section::where('nom', 'grande section')->first();
        } else {
            // Age out of range for predefined sections
            return;
        }

        $classe = Classe::where('section_id', $section->id)
                        ->whereDoesntHave('enfants', function ($query) {
                            $query->whereColumn('classes.id', 'enfants.classe_id');
                        })
                        ->first();

        if ($classe) {
            $enfant->section_id = $section->id;
            $enfant->classe_id = $classe->id;
            $enfant->save();
        }
    }

    public function getJardinsByRegion($region_id)
    {
        $jardins = Jardin::where('region_id', $region_id)->get();
        return response()->json($jardins);
    }
}
