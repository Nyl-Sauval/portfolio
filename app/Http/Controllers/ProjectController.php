<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController
{
    public function index()
    {
        return view('projects.index', [
            'projects' => Project::all(),
        ]);
    }

}
