<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sondage extends Model
{
    use HasFactory;
    protected $guarded=[];
    function interactions(){
        return $this->hasMany(informations::class,'sondage_id','id');
    }
    function admin(){
        return $this->belongsTo(User::class,'admin_id','id');
    }
}
