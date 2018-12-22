<?php

namespace App\Http\Controllers;

use App\Presence;
use App\Swimmer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PresenceController extends Controller
{

    public function testDate(){
        $carbon = new Carbon();

        return $carbon;
    }

    public function index()
    {
        //
    }


    public function store()
    {
        //
        $presence = new Presence();


        $presence->date = Carbon::parse(\request('date'));

        $presence->rating = \request('rating');

        $presence->swimmer_id = \request('swimmer_id');

        $presence->save();

        return $presence;
    }

    public function show($id)
    {
        return Swimmer::findOrFail($id)->presences;
    }
}
