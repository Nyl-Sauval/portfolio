<?php

namespace App\Http\Controllers;

use App\Models\Project;

class PageController
{
    public function index()
    {
        return view('welcome', [
            'projects' => Project::where('visibility', 1)->get(),
        ]);
    }
}
