<!-- /resources/views/tasks/create.blade.php -->
@extends('layouts.app')

@section('title', 'Criar tarefa para projeto {{ $project->name }}')

@section('content')
{!! Form::model(new App\Task, ['route' => ['projects.tasks.store', $project->slug], 'class' => '']) !!}
@include('tasks/partials/_form', ['submit_text' => 'Create tarefa'])
{!! Form::close() !!}
@endsection

@stop