<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class SwimmersController extends Controller
{
    //

    public function store(){

        $swimmer = new \App\Swimmer();

        $swimmer->firstName = \request('firstName');

        $swimmer->lastName = \request('lastName');

        $swimmer->trainer_id = \request('trainer_id');

        $swimmer->save();

    }

    public function getRating($id){
        $presences = \App\Swimmer::findOrFail($id)->presences;
        $value = 0;
        $i = 0;
        foreach ($presences as $presence){
            $value+=$presence->rating;
            ++$i;
        }
        return $value/$i;
    }
}
