{{-- /resources/views/auth/login.blade.php --}}
@extends('auth.header')
@section('title', 'Login')
@section('content')

<div class="row">
  <div class="col-md-6 col-md-offset-3">

    <h1>Registar uma conta</h1>
    <form method="POST" action="/auth/register">

    {!! csrf_field() !!}

      <div class="form-group">
        <label>Nome:</label>
        <input type="text" name="name" id="input" class="form-control" value="" required="required" title="">
      </div>

      <div class="form-group">
        <label>Email:</label>
        <input type="text" name="email" id="inputEmail" class="form-control" value="" required="required" title="">
      </div>

      <div class="form-group">
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" class="form-control" required="required" title="">
      </div>

      <div class="form-group">
        <label for="confirm_password">Confirme a Senha:</label>
        <input type="password" name="confirm_password" id="confirm_password" class="form-control" required="required" title="">
      </div>

<button type="submit" class="btn btn-primary">Registar</button>

    </form>

  </div>
</div>
@stop
