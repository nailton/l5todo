{{-- /resources/views/projects/edit.blade.php --}}
@extends('layouts.app')

@section('title', 'Editar projeto')

@section('content')
{!! Form::model($project, ['method' => 'PATCH', 'route' => ['projects.update', $project->slug]]) !!}
@include('projects/partials/_form', ['submit_text' => 'Edit project'])
{!! Form::close() !!}
@endsection

@stop
