<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens , HasFactory;
    public function user(){
        return $this->morphOne(User::class , 'actor' , 'actor_type' , 'actor_id' , 'id');
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
