<?php

namespace App\Http\Controllers;

use App\Models\Diploma;
use App\Models\Experience;
use App\Models\Project;

class PageController
{
    public function index()
    {
        $experiences = Experience::orderBy('start_date', 'desc')->get();
        $diplomas = Diploma::orderBy('start_date', 'desc')->get();
        $projects = Project::where('visibility', 1)->get();
        return view('index', [
            'experiences' => $experiences,
            'diplomas' => $diplomas,
            'projects' => $projects,
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
