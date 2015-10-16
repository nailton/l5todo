{{-- /resources/views/profile/password.blade.php --}}
@extends('layouts.painel.master')
@section('title', 'Editar senha')

@section('content')

<div class="page-header">
  <h5>Alterar senha</h5>
</div>

<div class="col-md-10">
  {!! Form::model($user,
    ['method' => 'POST']) !!}

    <div class="form-group">
      {!! Form::label('old_password', 'Senha atual:', ['class' => 'control-label']); !!}
      {!! Form::password('old_password', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('password', 'Nova senha:', ['class' => 'control-label']) !!}
      {!! Form::password('password', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('password_confirmation', 'Confirmar senha:', ['class' => 'control-label']) !!}
      {!! Form::password('password_confirmation', null, ['class' => 'form-control', 'required']) !!}
    </div>

    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}


    {!! Form::close() !!}

  </div>

  @stop
