<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fonction extends Model
{
    protected $table = 'fonction';
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function entreprise()
    {
        return $this->hasMany('App\Models\Fonction');
    }
    protected $fillable = [
        'code',
        'nom',
        'echelle',   
        'structure',
    ];
}