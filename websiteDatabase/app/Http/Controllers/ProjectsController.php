<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        
        return view('projects.create');
    }

    public function store()
    {
        $project = new Project();

        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');
    }

    public function show($id)
    {
        $project = Project::findsOrFail($id);

        dd($project->title);
      
        return view('projects.show', compact('project'));
    }

    public function edit($id)
    {
        $project = project::findOrFail($id);

        return view('projects.edit', compact('project'));
    }

    public function update($id)
    {
        $project = project::findOrFail($id);

        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');

    }

    public function destroy($id)
    {
        project::findOrFail($id)->delete();

        return redirect('/projects');
    }
}