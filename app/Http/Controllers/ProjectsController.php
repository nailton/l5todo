<?php

namespace App\Http\Controllers;

use DB;
use Input;
use Redirect;
use App\Project;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    protected $rules = [
            'name' => ['required', 'min:3'],
            'slug' => ['required']
    ];

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $projects = DB::table('projects')->paginate(10);
        return view('projects.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        // validação. Existe outra formas de validar, porém como o projeto e pequeno, no momento aqui está bom.
        $this->validate($request, $this->rules);

        $input = Input::all();
        Project::create($input);

        return redirect('painel')->with('message', 'Projeto criado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  Project $project
     * @return Response
     */
    public function show(Project $project)
    {
        //
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Project $project
     * @return Response
     */
    public function edit(Project $project)
    {
        //
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Project  $project
     * @param  \Illuminate\Http\Request $request
     * @return Response
     */
    public function update(Project $project, Request $request)
    {
        $this->validate($request, $this->rules);

        $input = array_except(Input::all(), '_method');
        $project->update($input);

        return Redirect::route('projects.show', $project->slug)->with('message',  'Projeto atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Project  $project
     * @return Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return Redirect::route('projects.index')->with('message', 'Projeto deletado!');
    }
}
