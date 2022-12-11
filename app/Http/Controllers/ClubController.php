<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class ClubController extends Controller
{
    public function indexClub(){
        $clubs = Club::orderb('id', 'desc')->paginate();
        //return $clubs;
        return view('clubs.indexClub', compact('clubs'));
    }

    public function createClub(){
        return view('clubs.createClub');
    }

    public function storeClub(Request $request){
        $club = new Club();
        
        $club->name = $request->name;
        $club->coach = $request->coach;
        $club->pitch = $request->pitch;
        $club->location = $request->location;

        //return $club;

        $club->save();

        return redirect()->route('clubs.show', $club);
    }

    public function showClub($club){
        $club = Club::find($club);
        //return $club;
        return view('clubs.showClub', ['club'=>$club]);
    }

    public function editClub(Club $club){
        //return $club;
        return view('clubs.editClub', compact('club'));
    }

    public function updateClub(Request $request, Club $club){
        //return $club;
        
        $club->name = $request->name;
        $club->coach = $request->coach;
        $club->pitch = $request->pitch;
        $club->location = $request->location;

        //return $club;

        $club->save();

        return view('clubs.showClub', ['club'=>$club]);
    }
}
