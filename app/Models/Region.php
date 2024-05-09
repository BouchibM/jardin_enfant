<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'region';
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function jardin()
    {
        return $this->hasMany('App\Models\Jardin');
    }
    protected $fillable = [
        'Nom',
        'Emplacement',
    ];
}