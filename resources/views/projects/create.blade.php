<!-- /resources/views/projects/create.blade.php -->
@extends('layouts.app')

@section('title', 'Criar projeto')

@section('content')
{!! Form::model(new App\Project, ['route' => ['projects.store']]) !!}
@include('projects/partials/_form', ['submit_text' => 'Create project'])
{!! Form::close() !!}
@endsection

@stop