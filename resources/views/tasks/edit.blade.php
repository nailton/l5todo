{{-- /resources/views/tasks/edit.blade.php --}}
@extends('layouts.painel.master')

@section('title', "Editar tarefa")
@section('content')
{!! Form::model($task,
  ['method' => 'PATCH',
  'route' => ['projects.tasks.update',
   $task->project_id, $task->id]
   ]) !!}
  @include('tasks/partials/_form', ['submit_text' => 'Edit tarefa'])
  {!! Form::close() !!}

  @stop
