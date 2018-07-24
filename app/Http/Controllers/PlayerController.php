<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function show($id)
    {   
        $player = \App\Player::findOrFail($id);
        // dd($player->team->name);
        return view ('players.show-player', compact('player'));
    }
}
