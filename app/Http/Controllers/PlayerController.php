<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function indexPlayer(){
        $players = Player::orderb('id', 'desc')->paginate();
        //return $players;
        return view('players.indexPlayer', compact('players'));
    }

    public function createPlayer(){
        return view('players.createPlayer');
    }

    public function storePlayer(Request $request){
        $player = new Player();
        
        $player->name = $request->name;
        $player->age = $request->age;
        $player->position = $request->position;

        //return $player;

        $player->save();

        return redirect()->route('players.show', $player);
    }

    public function showPlayer($player){
        $player = Player::find($player);
        //return $player;
        return view('players.showPlayer', ['player'=>$player]);
    }

    public function editPlayer(Player $player){
        //return $player;
        return view('players.editPlayer', compact('player'));
    }

    public function updatePlayer(Request $request, Player $player){
        //return $player;
        
        $player->name = $request->name;
        $player->age = $request->age;
        $player->position = $request->position;

        //return $player;

        $player->save();

        return view('players.showPlayer', ['player'=>$player]);
    }
}
