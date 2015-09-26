{{-- /resources/views/projects/edit.blade.php --}}
@extends('layouts.painel.master')
@section('title', 'Editar projeto')
@section('content')

<div class="col-md-10">
  <h5>Editar projeto</h5>
</div>

<div class="col-md-2">
  {!! link_to_route('projects.index', 'Voltar aos projetos', null, ['class' => 'btn']) !!}
</div>
<div class="col-md-12">
<hr>
  {!! Form::model($project, ['method' => 'PATCH', 'route' => ['projects.update', $project->id]]) !!}
  @include('projects/partials/_form', ['submit_text' => 'Editar projeto'])
  {!! Form::close() !!}

</div>

@stop
