<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('id', 'DESC')
                        ->limit(8)
                        ->get();

        return view('projects', compact('projects')); 
    
    }
}
