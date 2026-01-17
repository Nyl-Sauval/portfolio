<?php

namespace App\Http\Controllers;

use App\Models\Diploma;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::orderBy('start_date', 'desc')->get();
        $diplomas = Diploma::orderBy('start_date', 'desc')->get();
        return view('index', compact('experiences'), compact('diplomas'));
    }

    public function show($id)
    {
        $experience = Experience::findOrFail($id);
        return view('experiences.show', compact('experience'));
    }
}
