<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    protected $table = 'structure';
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprise');
    }
    protected $fillable = [
        'code',
        'nom',
    ];
}