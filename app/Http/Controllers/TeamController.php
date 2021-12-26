<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::orderBy('id', 'DESC')
                        ->limit(8)
                        ->get();

        return view('team', compact('teams')); 
    }
}
