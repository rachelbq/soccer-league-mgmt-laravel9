<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competition;

class CompetitionController extends Controller
{
    public function indexCompetition(){
        $competitions = Competition::orderby('id', 'desc')->paginate();
        //return $competitions;
        return view('competitions.indexCompetition', compact('competitions'));
    }

    public function createCompetition(){
        return view('competitions.createCompetition');
    }

    public function storeCompetition(Request $request){

        $request->validate([
            'date' => 'required',
            'hour' => 'required',
            'referee' => 'required',
        ]);

        // $competition = new Competition();
        
        // $competition->day = $request->day;
        // $competition->hour = $request->hour;
        // $competition->referee = $request->referee;
        // $competition->score = $request->score;

        // //return $competition;

        // $competition->save();

        //massive allocation:
        $competition = Competition::create($request->all());

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

        $request->validate([
            'day' => 'required',
            'hour' => 'required|min:5|max:5',
            'id_local_club' => 'required',
            'id_visitor_club' => 'required',
        ]);
        
        // $competition->day = $request->day;
        // $competition->hour = $request->hour;
        // $competition->referee = $request->referee;
        // $competition->score = $request->score;

        // //return $competition;

        // $competition->save();

        //massive allocation:
        $competition->update($request->all());

        return view('competitions.showCompetition', ['competition'=>$competition]);
    }

    public function destroyCompetition(Competition $competition){
        $competition->delete();

        return redirect()->route('competitions.indexCompetition');     
    }
}