<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController
{
    public function index()
    {
        return view('projects.index', [
            'projects' => Project::where('visibility', 1)->get(),
        ]);
    }
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.show', compact('project'));
    }


}
