<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\CustomUser;

class UserRol extends Model
{
    protected $table = 'user_rol';
   
    public function Custom_users():hasMany{
        return $this->hasMany(CustomUser::class, 'person_id', 'role_id', 'id');
    }
}