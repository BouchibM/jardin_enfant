<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Utilisateur extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'utilisateur';

    public function getAuthPassword()
    {
        return $this->motdepass;
    }
    protected $fillable = [
        'Nom',
        'Prenom',
        'email',
        'motdepass',
        'status',
        'type_user_id'
    ];

    protected $hidden = [
        'motdepass',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function typeUser()
    {
        return $this->belongsTo(Type_User::class, 'type_user_id');
    }
}