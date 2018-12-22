<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{

    public $timestamps = false;

    public function swimmers(){
        return $this->hasMany(Swimmer::class);
    }
}
