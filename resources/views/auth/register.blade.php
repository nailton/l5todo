{{-- /resources/views/auth/login.blade.php --}}
@extends('layouts.painel.master')
@section('title', 'Login')
@section('content')

<div class="col-md-6 col-md-offset-3">
  <h3>Registar uma conta</h3>

  <form method="POST" action="/auth/register">

    {!! csrf_field() !!}

    <legend>Crie sua conta agora. É rápido e fácil.</legend>

    @include('auth/partials/_form', ['submit_text' => 'Registrar'])

  </form>
  <br>
</div>
@stop
