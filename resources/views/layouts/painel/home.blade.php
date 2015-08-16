{{-- /resources/views/projects/index.blade.php --}}
@extends('layouts.painel.master')
@section('title', 'Home')
@section('content')

<div class="col-md-6">
  <h4>Novo projeto</h4>
  <hr>
  {!! Form::model(new App\Project, ['route' => ['projects.store'],
  'class' => 'form-horizontal']) !!}
  @include('projects/partials/_form', ['submit_text' => 'Criar projeto'])
  {!! Form::close() !!}
</div>

<div class="col-md-6">
  <h4>Nova tarefa</h4>
  <hr>
  {!! Form::model(new App\Task, ['route' => ['projects.tasks.store'],
  'class' => 'form-horizontal']) !!}
  @include('tasks/partials/_form', ['submit_text' => 'Criar tarefa'])
  {!! Form::close() !!}
</div>
@stop
