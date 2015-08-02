@extends('layouts.app')

@section('title', 'Tarefas para esse projeto')

@section('content')
<h2>{{ $project->name }}</h2>
@if (!$project->tasks->count())
<p>Esse projeto ainda não tem tarefas</p>
@else
<ul>
  @foreach($project->tasks as $task)
  <li><a href="{{ route('projects.tasks.show', [$project->slug, $task->slug]) }}">{{ $task->name }}</a></li>
  @endforeach
</ul>
@endif
@endsection
