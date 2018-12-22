<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Swimmer extends Model
{
    //

    public $timestamps = false;

    public function trainer(){
        return $this->belongsTo(Trainer::class);
    }

    public function presences(){
        return $this->hasMany(Presence::class);
    }

}
