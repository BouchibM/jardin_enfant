<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $table = 'classe';
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function jardin()
    {
        return $this->belongsTo('App\Models\Jardin');
    }
    protected $fillable = [
        'id',
        'nom',
        'capacite',
        'section_id',
        'jardin_id',
       
    ];

}