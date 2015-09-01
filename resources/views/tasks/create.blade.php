{{-- /resources/views/tasks/create.blade.php --}}
@extends('layouts.painel.master')

@section('title', 'Criar tarefa para projeto {{ $project->name }}')

@section('content')
{!! Form::model(new App\Task, ['route' => ['projects.tasks.store'], 'class' => '']) !!}
@include('tasks/partials/_form', ['submit_text' => 'Criar tarefa'])
{!! Form::close() !!}

@stop


