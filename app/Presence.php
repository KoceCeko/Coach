<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    //
    public $timestamps = false;

    public function swimmer(){
        $this->belongsTo(Swimmer::class);
    }
}
