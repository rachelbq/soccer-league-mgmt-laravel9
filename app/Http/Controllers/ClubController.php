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

        $request->validate([
            'name' => 'required',
            'coach' => 'required',
            'pitch' => 'required',
            'location' => 'required',
        ]);        

        // $club = new Club();
        
        // $club->name = $request->name;
        // $club->coach = $request->coach;
        // $club->pitch = $request->pitch;
        // $club->location = $request->location;

        // //return $club;

        // $club->save();

        //massive allocation:
        $club = Club::create($request->all());

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

        $request->validate([
            'name' => 'required',
            'coach' => 'required',
            'pitch' => 'required',
            'location' => 'required',
        ]);
        
        // $club->name = $request->name;
        // $club->coach = $request->coach;
        // $club->pitch = $request->pitch;
        // $club->location = $request->location;

        // //return $club;

        // $club->save();
        
        //massive allocation:
        $club->update($request->all());

        return view('clubs.showClub', ['club'=>$club]);
    }

    public function destroyClub(Club $club){
        $club->delete();

        return redirect()->route('clubs.indexClub');        
    }
}
