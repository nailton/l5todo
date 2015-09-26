{{-- /resources/views/projects/show.blade.php --}}
@extends('layouts.painel.master')

@section('title', 'Tarefas para esse projeto')

@section('content')

<div class="col-md-10">
<h5>Tarefas do projeto: {{ $project->name }} <span class="label label-default l5-link-create">{!! link_to_route('projects.tasks.create', 'Nova tarefa', $project->id) !!}</span></h5>
</div>

<div class="col-md-2">
  {!! link_to_route('projects.index', 'Voltar aos projetos', null, ['class' => 'btn']) !!}
</div>


@if (!$project->tasks->count())
<p>Esse projeto ainda não tem tarefas</p>
@else
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Nome da tarefa</th>
      <th>Editar</th>
      <th>Deletar</th>
    </tr>
  </thead>
  <tbody>

    @foreach($project->tasks as $task)

    <tr>

      <td>{!! Form::open(array('class' => 'form-inline','method' =>'DELETE','route' => array('projects.tasks.destroy',$project->id,$task->id))) !!}
        {{ $task->id }}
      </td>

      <td><a href="{{ route('projects.tasks.show', [$project->id, $task->id]) }}">{{ $task->name }}</a></td>

      <td>{!! link_to_route('projects.tasks.edit', 'Editar', array($project->id, $task->id), array('class' => 'btn btn-primary')) !!}</td>

      <td>{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
        {!! Form::close()  !!}</td>

      </tr>

      @endforeach

    </tbody>
  </table>

  @endif
  <div class="col-md-12 l5-project-pag">
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Aguarde!</strong> em breve paginação ...
    </div>
  </div>
  @stop
