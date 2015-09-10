{{-- /resources/views/auth/login.blade.php --}}
@extends('auth.header')
@section('title', 'Login')
@section('content')

<div class="row">
  <div class="col-md-6 col-md-offset-3">

    <h1>Login</h1>

    <form action="/auth/login" method="POST" role="form">

      {!! csrf_field() !!}

      <legend>Entre com seus dados, para iniciar a sessão.</legend>

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
    @include('errors')
  </div>
</div>

@stop
