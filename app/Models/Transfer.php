<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    protected $table = 'transfer';
    protected $fillable = [
        'parent_id',
        'enfant_id',
        'old_region_id',
        'old_jardin_id',
        'new_region_id',
        'new_jardin_id',
        'motif',
        'raison',
        'status',
        'motif_rejet',
    ];

    public function enfant()
    {
        return $this->belongsTo(Enfant::class, 'enfant_id');
    }

    public function ancienneRegion()
    {
        return $this->belongsTo(Region::class, 'old_region_id');
    }

    public function nouvelleRegion()
    {
        return $this->belongsTo(Region::class, 'new_region_id');
    }

    public function ancienJardin()
    {
        return $this->belongsTo(Jardin::class, 'old_jardin_id');
    }

    public function nouveauJardin()
    {
        return $this->belongsTo(Jardin::class, 'new_jardin_id');
    }
}