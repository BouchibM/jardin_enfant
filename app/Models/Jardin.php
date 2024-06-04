<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jardin extends Model
{
    use HasFactory;

    protected $table = 'jardin';  // Assurez-vous que le nom de la table est correct

    protected $fillable = ['nom', 'adresse', 'capacite', 'region_id'];  // Adapté en fonction de vos besoins

    // Relation : un jardin peut avoir plusieurs classes
    public function classes() {
        return $this->hasMany(Classe::class);
    }

    // Relation : un jardin appartient à une région
    public function region() {
        return $this->belongsTo(Region::class);
    }
    public function sections()
    {
        return $this->hasMany(Section::class);
    }
    
}
