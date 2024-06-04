<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reinscription extends Model
{
    use HasFactory;
    protected $table = 'reinscription';
    protected $fillable = [
        'parent_id',
        'enfant_id',
        'pay_slip',
        'status',
        'transaction_number',
        'payment_slip',
        'rejection_reason',
        'new_section_id',
    ];

    public function parent()
    {
        return $this->belongsTo(Parents::class);
    }

    public function enfant()
    {
        return $this->belongsTo(Enfant::class);
    }

    public function newSection()
    {
        return $this->belongsTo(Section::class, 'new_section_id');
    }
}