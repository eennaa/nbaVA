<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = \App\Team::all();
        return view('teams.index', compact('teams'));
    }

    public function show($id)
    {
        $team = \App\Team::with('players')->findOrFail($id);
        // dd($team->players);
        return view('teams.show', compact('team'));
    }
    //
}
