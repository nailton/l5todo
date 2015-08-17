<!-- /resources/views/projects/create.blade.php -->
@extends('layouts.painel.master')
@section('title', 'Criar projeto')
@section('content')

<div class="page-header">
  <h3>Criar projeto</h3>
</div>

<div class="col-md-10">
  {!! Form::model(new App\Project, ['route' => ['projects.store'],
  'class' => 'form-horizontal']) !!}
  @include('projects/partials/_form', ['submit_text' => 'Criar projeto'])
  {!! Form::close() !!}
</div>

@endsection
