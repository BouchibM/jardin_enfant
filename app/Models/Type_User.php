<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_User extends Model
{
    protected $table = 'type_user';

    protected $fillable = ['type'];

    public function users()
    {
        return $this->hasMany(User::class, 'type_user_id');
    }
}