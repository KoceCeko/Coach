<?php

namespace App\Http\Controllers;

use App\Trainer;
use Illuminate\Http\Request;

class TrainersController extends Controller
{
    //
    public function index(){

        return \App\Trainer::all();
    }

    public function getSwimmers($trainer_id){

        return \App\Trainer::findOrFail($trainer_id)->swimmers;

    }


    public function store(){

        $trainer = new \App\Trainer();

        $trainer->firstName = \request('firstName');

        $trainer->lastName = \request('lastName');

        $trainer->save();

    }
}
