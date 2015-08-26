{{-- /resources/views/projects/index.blade.php --}}
@extends('layouts.painel.master')
@section('title', 'Lista de projetos')
@section('content')
<h5>Minhas tarefas <span class="label label-default l5-link-create">{!! link_to_route('projects.create', 'Nova tarefa') !!}</span></h5>
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

    @foreach($tasks as $task)
    <tr>

      <td>{!! Form::open(array('class' => 'form-inline',
        'method' => 'DELETE',
        'route' => array('projects.tasks.destroy',
        $task->project->id, $task->id))) !!} {{ $task->id }}</td>

        <td><a href="{{ route('projects.show', $task->project->id) }}">
          {{ $task->project->name }}</a></td>
          <td><a href="{{ route('projects.tasks.show', [$task->project->id, $task->id]) }}">{{ $task->name }}</a></td>

          <td>{!! link_to_route('projects.tasks.edit', 'Editar', [$task->project->id, $task->id], array('class' => 'btn btn-primary')) !!}</td>

          <td>{!! Form::submit('Apagar', array('class' => 'btn btn-danger')) !!} {!! Form::close() !!}</td>

        </tr>

        @endforeach

      </tbody>
    </table>

    @endif
    <div class="col-md-12 l5-project-pag">
      {!! $tasks->render() !!}
    </div>
    @stop
