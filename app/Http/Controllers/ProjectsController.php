<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['show']);
    }

    public function index(){
        $projects = Project::all();
        return view('projects.index', ['projects' => $projects]);
    }
    public function create(){
        return view('projects.create');
    }
    public function store(){
        Project::create(\request()->validate(['title'=>['required','min:5'],'description'=>['required','min:10']]) + ['owner_id'=>auth()->id()]);

        return redirect('/projects');
    }
    public function show(Project $project){
        $this->authorize('update', $project);
        return view('projects.show', compact('project'));
    }
    public function edit(Project $project){

        return view('projects.edit', compact('project'));
    }
    public function update(Project $project){
        $project->title = \request('title');
        $project->description = \request('description');
        $project->save();
        return redirect('/projects');
    }
    public function destroy(Project $project){
        $project->delete();
        return redirect('/projects');
    }

}
