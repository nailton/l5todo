{{-- /resources/views/profile/edit.blade.php --}}
@extends('layouts.painel.master')
@section('title', 'Editar perfil')

@section('content')

<div class="page-header">
  <h5>Editar meu perfil</h5>
</div>

<div class="col-md-10">
  {!! Form::model($user,
    ['method' => 'PATCH', 'route' => ['profile.update', $user->id]]) !!}

    <div class="form-group">
      {!! Form::label('name', 'Nome:', ['class' => 'control-label']); !!}
      {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
      {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
    </div>

    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}


    {!! Form::close() !!}

  </div>

  @stop
