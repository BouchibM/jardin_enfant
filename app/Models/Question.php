<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'question';

    protected $fillable = [
        'enfant_id',
        'age_marche',
        'age_propre_jour',
        'age_propre_nuit',
        'age_parle',
        'premier_mot',
        'conditions',
        'collectivite_avant',
        'maladies',
        'operations',
        'nombre_freres_soeurs',
        'condition_habitation',
        'chambre_individuelle',
        'partage_chambre_avec',
        'mange_bien',
        'dort_bien',
        'activites_maison',
        'volontaire',
        'turbulent',
        'observations',
    ];

    public function enfant()
    {
        return $this->belongsTo(Enfant::class);
    }
}