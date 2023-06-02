<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded=[

    ];

    function role(){
        return $this->belongsTo(role::class);
    }

    function information(){
        return $this->hasOne(role::class);
    }

    function Alert(){
        return $this->hasMany(Alert::class);
    }

    function Post(){
        return $this->hasMany(Post::class);
    }

    function Comment(){
        return $this->hasMany(Comment::class);
    }

    function RespComment(){
        return $this->hasMany(RespComment::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

}
