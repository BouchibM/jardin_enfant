<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    protected $table = 'entraprise';
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function entreprise()
    {
        return $this->hasMany('App\Models\Structure');
    }
    protected $fillable = [
        'id',
        'nom',
    ];
}