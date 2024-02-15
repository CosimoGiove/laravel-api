<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newProject = Project::all();

        return view("admin.project.index",compact("newProject"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Project $project)

    {
        $newProject = Project::all();
        $tech =Technology::all();

        return view('admin.project.create',compact("newProject","tech"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $NewProject = new Project();
        $NewProject->title = $data["title"];
        $NewProject->description = $data["description"];
        $NewProject->language = $data["language"];
        $NewProject->frameworks = $data["frameworks"];
        $NewProject->save();

        return redirect()->route("admin.dashboard",$NewProject->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $tech =Technology::all();
        return view("admin.project.show",compact("project","tech"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view("admin.edit",compact("project"));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = request()->all();
        $project->update($data);

        return view("admin.modifiche",compact("project"));
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        
        return redirect()->route("admin.dashboard")->with("message","hai cancellato il messaggio");
    }
}
