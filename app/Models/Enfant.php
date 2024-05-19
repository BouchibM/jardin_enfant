<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfant extends Model
{
    protected $table = 'enfant';
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
 /**
     * Get the parent of the enfant.
     */
    // public function parent()
    // {
    //     return $this->belongsTo(Parent::class);
    // }

    /**
     * Get the class that the enfant belongs to.
     */
    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }
    protected $fillable = [
        'nom',
        'prenom',
        'date_de_naissance',
        'lieu',
        'adresse_actuelle',
        'groupe_sanguin',
        'parent_id',
        'extrait_naissance_path',
        'photo_path',
        'certificat_vaccination_path',
        'certificat_sante_path',
        'autorisation_medical_path',
        'autorisation_sortie_path',
        'classe_id',
    ];

   
}