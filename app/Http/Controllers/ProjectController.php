<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$projects = Project::all();
		return view('project.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Should probably be looking into Authorization instead of this
		if (Gate::allows('create-project')) {
			return view('project.create');
		}
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$this->validate($request, $this->rules());
		$project = new Project();
		$user = Auth::user();

		$project->title 		= $request->title;
		$project->summary 		= $request->summary;
		$project->poster_id		= $user->id;
		$project->category 		= $request->category;
		$project->description 	= $request->description;

		$project->save();

		return redirect()->route("project.show", ['project' => $project->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('project.show', ['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
		return view('project.edit', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
		$this->validate($request, $this->rules());

		$project->title = $request->title;
		$project->summary = $request->summary;
		$project->category = $request->category;
		$project->description = $request->description;

		$project->save();
		return redirect()->route("project.show", ['project' => $project->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }

	protected function rules()
	{
		return [
			'title' => 'required|min:10|max:130',
			'summary' => 'required|min:10',
			'category' => 'required',
			'description' => 'required|min:10'
		];
	}
}
