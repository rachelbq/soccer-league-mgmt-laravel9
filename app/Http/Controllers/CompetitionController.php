<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competition;

class CompetitionController extends Controller
{
    public function indexCompetition(){
        $competitions = Competition::orderb('id', 'desc')->paginate();
        //return $competitions;
        return view('competitions.indexCompetition', compact('competitions'));
    }

    public function createCompetition(){
        return view('competitions.createCompetition');
    }

    public function storeCompetition(Request $request){
        $competition = new Competition();
        
        $competition->day = $request->day;
        $competition->hour = $request->hour;
        $competition->referee = $request->referee;
        $competition->score = $request->score;

        //return $competition;

        $competition->save();

        return redirect()->route('competitions.show', $competition);
    }

    public function showCompetition($competition){
        $competition = Competition::find($competition);
        //return $competition;
        return view('competitions.showCompetition', ['competition'=>$competition]);
    }

    public function editCompetition(Competition $competition){
        //return $competition;
        return view('competitions.editCompetition', compact('competition'));
    }

    public function updateCompetition(Request $request, Competition $competition){
        //return $competition;
        
        $competition->day = $request->day;
        $competition->hour = $request->hour;
        $competition->referee = $request->referee;
        $competition->score = $request->score;

        //return $competition;

        $competition->save();

        return view('competitions.showCompetition', ['competition'=>$competition]);
    }
}
