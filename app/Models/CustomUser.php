<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\UserRol;

class CustomUser extends Model
{
    protected $table = 'custom_user';
    protected $fillable = ['username','password','email', 'recovery_email','recovery_token', 'token_expiration', 'registration_date', 'active', 'created_at', 'updated_at'];

    public function user_roles():hasMany{
        return $this->hasMany(UserRol::class, 'person_id', 'id');
    }

}