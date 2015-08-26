{{-- /resources/views/projects/index.blade.php --}}
@extends('layouts.painel.master')
@section('title', 'Lista de projetos')
@section('content')
  <h5>Meus Projetos <span class="label label-default l5-link-create">{!! link_to_route('projects.create', 'Novo projeto') !!}</span></h5>
<hr>
@if (!$projects->count())
Você não tem projetos
@else
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Nome do projeto</th>
      <th>Editar</th>
      <th>Deletar</th>
    </tr>
  </thead>
  <tbody>

    @foreach($projects as $project)

    <tr>

        <td>{!! Form::open(array('class' => 'form-inline',
        'method' => 'DELETE',
        'route' => array('projects.destroy',
        $project->id))) !!} {{ $project->id }}</td>

        <td><a href="{{ route('projects.show', $project->id) }}">{{ $project->name }}</a></td>

        <td>{!! link_to_route('projects.edit', 'Edit', array($project->id), array('class' => 'btn btn-primary')) !!}</td>

        <td>{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!} {!! Form::close() !!}</td>

        </tr>

      @endforeach

    </tbody>
  </table>

  @endif
<div class="col-md-12 l5-project-pag">
  {!! $projects->render() !!}
</div>
  @endsection
  @stop
