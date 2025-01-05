<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends  Controller
{
    public function index()
    {
        return view('project', [
            'projects' => Project::where('visibility', 1)->get(),
        ]);
    }
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.show', compact('project'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {

        $attributes = $request->validate([
            'title' => 'required|string|max:255',
            'summary' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'complexity' => 'nullable|integer',
            'technologies' => 'nullable|array',
            'technologies.*' => 'nullable|string|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'project_link' => 'nullable|url',
            'status' => 'nullable|string|max:255',
            'type' => 'nullable|string|max:255',
            'estimated_duration' => 'nullable|string|max:255',
        ]);



        Project::create(
            array_merge($attributes, ['visibility' => 1], ['images' => []])
        );

        return redirect('/')->with('success', 'Projet créé avec succès');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);


        $request->validate([
            'title' => 'required|string|max:255',
            'summary' => 'required|string|max:255',
            'description' => 'required|string',
            'technologies' => 'nullable|array',
            'technologies.*' => 'string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'project_link' => 'required|url',
            'status' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'estimated_duration' => 'required|string|max:255',
        ]);


        $project->title = $request->input('title');
        $project->summary = $request->input('summary');
        $project->description = $request->input('description');
        $project->technologies = $request->input('technologies', []);
        $project->start_date = $request->input('start_date');
        $project->end_date = $request->input('end_date');
        $project->project_link = $request->input('project_link');
        $project->status = $request->input('status');
        $project->type = $request->input('type');
        $project->estimated_duration = $request->input('estimated_duration');

        $project->save();

        return redirect()->route('projects.show', $project->id)
            ->with('success', 'Projet mis à jour avec succès');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect('/');
    }
}
