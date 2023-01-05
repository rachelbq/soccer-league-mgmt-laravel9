<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competition;
use App\Models\Club;

class CompetitionController extends Controller
{
    public function indexCompetition(){
        $competitions = Competition::orderby('day', 'desc')->paginate(5);
        $clubs = Club::orderBy('name', 'asc')->get();

        return view('competitions.indexCompetition', compact('competitions'))->with('clubs', $clubs);
    }

    public function createCompetition(){
        $clubs = Club::orderBy('name', 'asc')->get();
        $clubs->prepend((object) ['id' => '', 'name' => '--Select club/team--']);
        
        return view('competitions.createCompetition')->with('clubs', $clubs);
    }

    public function storeCompetition(Request $request){

        $request->validate([
            'day' => 'required',
            'hour' => 'required',
            'id_local_club' => 'required',
            'id_visitor_club' => 'required',
            'referee' => 'required',
        ]);

        $competition = new Competition();
        
        $competition->day = $request->day;
        $competition->hour = $request->hour;
        $competition->id_local_club = $request->id_local_club;
        $competition->id_visitor_club = $request->id_visitor_club;
        $competition->referee = $request->referee;
        $competition->score = $request->score;

        $competition->save();

        return redirect()->route('competitions.show', $competition);
    }

    public function showCompetition(Competition $competition){
        $localClub = $competition->localClub;
        $visitorClub = $competition->visitorClub;
        
        return view('competitions.showCompetition', compact('competition', 'localClub', 'visitorClub'));
    }

    public function editCompetition(Competition $competition){
         $clubs = Club::orderBy('name', 'asc')->get();
         $clubs->prepend((object) ['id' => '', 'name' => '--Select club/team--']);
        
         return view('competitions.editCompetition', compact('competition'))->with('clubs', $clubs);
    }
    
    public function updateCompetition(Request $request, Competition $competition){
        
        $request->validate([
            'day' => 'required',
            'hour' => 'required',
            'id_local_club' => 'required',
            'id_visitor_club' => 'required',
            'referee' => 'required',
        ]);
        
        $competition->day = $request->day;
        $competition->hour = $request->hour;
        $competition->id_local_club = $request->id_local_club;
        $competition->id_visitor_club = $request->id_visitor_club;
        $competition->referee = $request->referee;
        $competition->score = $request->score;

        $competition->save();

        return redirect()->route('competitions.show', $competition);
    }

    public function destroyCompetition(Competition $competition){
        $competition->delete();

        return redirect()->route('competitions.index');     
    }
}