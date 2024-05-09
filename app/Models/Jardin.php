<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jardin extends Model
{
    protected $table = 'jardin';
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     public function region()
{
    return $this->belongsTo('App\Models\Region');
}
public function classes()
    {
        return $this->hasMany('App\Models\Classe');
    }
    protected $fillable = [
        'REGION',
        'nom',
        'date_ouverture',
        'adresse',
        'num_agrement',
        'nature_juridique',
        'poste_amenage',
        'capacite',
        'status',
    ];
}