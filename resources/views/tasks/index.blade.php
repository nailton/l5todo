{{-- /resources/views/projects/index.blade.php --}}
@extends('layouts.painel.master')
@section('title', 'Lista de projetos')
@section('content')
<h5>Minhas tarefas <span class="label label-default l5-link-create">{!! link_to('/tasks/create', 'Nova tarefa') !!}</span></h5>
<hr>
@if (!$tasks->count())
Você não tem projetos
@else
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Nome do projeto</th>
      <th>Nome da tarefa</th>
      <th>Editar</th>
      <th>Deletar</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tasks as $project_task)
    @foreach($project_task->tasks as $task)
    <tr>

      {{-- FORMULÁRIO --}}
      <td>{!! Form::open(array('class' => 'form-inline',
        'method' => 'DELETE',
        'route' => array('projects.tasks.destroy',
        $project_task->id, $task->id))) !!} {{ $project_task->id }}</td>

        {{-- DADOS LINK PROJETO --}}
        <td><a href="{{ route('projects.show', $project_task->id) }}">
          {{ $project_task->name }}</a></td>

          {{--  DADOS LINK TAREFA --}}
          <td><a href="{{ route('projects.tasks.show', [$task->project, $task->id]) }}">{{ $task->name }}</a></td>

          {{-- LINK EDITAR TAREFA --}}
          <td>{!! link_to_route('projects.tasks.edit', 'Editar', [$task->project, $task->id], array('class' => 'btn btn-primary')) !!}</td>

          {{-- LINK APAGAR TAREFA --}}
          <td>{!! Form::submit('Apagar', array('class' => 'btn btn-danger')) !!} {!! Form::close() !!}</td>

        </tr>

        @endforeach
        @endforeach

      </tbody>
    </table>

    @endif
    <div class="col-md-12 l5-project-pag">
      {!! $tasks->render() !!}
    </div>
    @stop
