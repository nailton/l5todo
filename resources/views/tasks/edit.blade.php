{{-- /resources/views/tasks/edit.blade.php --}}
@extends('layouts.painel.master')

@section('title', "Editar tarefa")
@section('content')
<div class="page-header">
  <h3>Editar tarefa</h3>
</div>

<div class="col-md-10">
{!! Form::model($task,
    ['method' => 'PATCH',
    'route' => ['projects.tasks.update',
    $task->project_id, $task->id]
    ]) !!}
    @include('tasks/partials/_form', ['submit_text' => 'Edit tarefa'])
    {!! Form::close() !!}
  </div>

  @stop
