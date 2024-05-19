<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'section';
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function classe()
    {
        return $this->hasMany('App\Models\classe');
    }
    protected $fillable = [
        'id',
        'nom',
        'capacite',
    ];
}