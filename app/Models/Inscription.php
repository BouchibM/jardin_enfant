<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    protected $table = 'inscription_enfant';

    protected $fillable = [
        'parent_id', 'enfant_id', 'status', 'motif_rejet', 'created_at', 'updated_at'
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function parent()
    {
        return $this->belongsTo(Parents::class);
    }

    public function enfant()
    {
        return $this->belongsTo(Enfant::class);
    }
}