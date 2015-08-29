<?php

namespace App\Http\Controllers;

use DB;
use Input;
use Redirect;
use App\Project;
use App\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TasksController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    protected $rules = [
            'name' => ['required', 'min:3'],
            'slug' => ['required'],
            'description' => ['required']
    ];
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Project $project)
    {
        $tasks = Task::with('project')->paginate(10);
        // $tasks = DB::table('projects')->task;
        // $project = Project::find(1);
        // return $project->tasks;
        // return $project->task->name;
        // return $tasks[0]->name;
        // dd($tasks);
        return view('tasks.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Project $project)
    {
        $project = Project::lists('name', 'id');
        return view('tasks.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Project $project
     * @param  \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Project $project, Request $request)
    {
        $this->validate($request, $this->rules);

        $input = Input::all();
        Task::create($input);

        if (isset($project->id)) {

        $input['project_id'] = $project->id;
        return Redirect::route('projects.show', $project->slug)->with('message', 'Tarefa criada!');
        }

        return redirect('painel')->with('message', 'Tarefa criada!');


    }

    /**
     * Display the specified resource.
     *
     * @param  Project  $project
     * @param  Task  $task
     * @return Response
     */
    public function show(Project $project, Task $task)
    {
        //
        return view('tasks.show', compact('project', 'task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Project $project
     * @param  Task $task
     * @return Response
     */
    public function edit(Project $project, Task $task)
    {
        $project = Project::lists('name', 'id');
        return view('tasks.edit', compact('project', 'task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Project $project
     * @param  \App\Task $task
     * @param  \Illuminate\Http\Request $request
     * @return Response
     */
    public function update(Project $project, Task $task, Request $request)
    {
        $this->validate($request, $this->rules);

        $input = array_except(Input::all(), '_method');
        $task->update($input);

        return Redirect::route('projects.tasks.show', [$project->id, $task->id])->with('message',  'Tarefa atualizada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Project $project, Task $task)
    {
        $task->delete();
        return Redirect::route('projects.tasks.index',
            array($project->id,$task->id))->with('message', 'Tarefa deletada!');
    }
}
