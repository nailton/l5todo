{{-- /resources/views/auth/login.blade.php --}}
@extends('layouts.painel.master')
@section('title', 'Login')
@section('content')

<div class="col-md-6 col-md-offset-3">
  <h3>Login</h3>

  <form action="/auth/login" method="POST" role="form">

    {!! csrf_field() !!}

    <legend>Entre com suas credenciais</legend>

    <div class="form-group">
      <label for="email">E-mail</label>
      <input type="text" name="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="Digite seu e-mail" required>
    </div>

    <div class="form-group">
      <label for="password">Senha</label>
      <input type="password" name="password" class="form-control" id="password" required>
    </div>

    <div class="form-group">
      <label for="remember">Lembrar login</label>
      <input type="checkbox" name="remember">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <br>
</div>

@stop
