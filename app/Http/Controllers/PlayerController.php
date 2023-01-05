<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Club;

class PlayerController extends Controller
{
    public function indexPlayer(){
        $players = Player::orderby('id', 'desc')->paginate(15);
        $clubs = Club::orderBy('name', 'asc')->get();

        return view('players.indexPlayer', compact('players'))->with('clubs', $clubs);
    }

    public function createPlayer(){
        $clubs = Club::orderBy('name', 'asc')->get();
        $clubs->prepend((object) ['id' => '', 'name' => '--Select club--']);
        
        return view('players.createPlayer')->with('clubs', $clubs);
    }

    public function storePlayer(Request $request){

        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'id_club' => 'required',
            'position' => 'required',
        ]);

        $player = new Player();
        
        $player->name = $request->name;
        $player->age = $request->age;
        $player->id_club = $request->id_club;
        $player->position = $request->position;

        $player->save();

        return redirect()->route('players.show', $player);
    }

    public function showPlayer(Player $player){
        
        return view('players.showPlayer', compact('player'));
    }

    public function editPlayer(Player $player){
        $clubs = Club::orderBy('name', 'asc')->get();
        $clubs->prepend((object) ['id' => '', 'name' => '--Select club--']);
       
        return view('players.editPlayer', compact('player'))->with('clubs', $clubs);
    }

    public function updatePlayer(Request $request, Player $player){
        
        $request->validate([
            'name' => 'required',
            'age' => 'required|min:2|max:2',
            'id_club' => 'required',
            'position' => 'required'
        ]);
        
        $player->name = $request->name;
        $player->age = $request->age;
        $player->id_club = $request->id_club;
        $player->position = $request->position;

        $player->save();

        return redirect()->route('players.show', $player);
    }

    public function destroyPlayer(Player $player){
        $player->delete();

        return redirect()->route('players.index');        
    }
}
