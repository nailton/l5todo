<!-- /resources/views/tasks/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Editar tarefa {{ $task->name }}')

@section('content')
{!! Form::model($task, ['method' => 'PATCH', 'route' => ['projects.tasks.update', $project->slug, $task->slug]]) !!}
@include('tasks/partials/_form', ['submit_text' => 'Edit tarefa'])
{!! Form::close() !!}
@endsection

@stop