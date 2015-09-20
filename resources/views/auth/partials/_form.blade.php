{{-- /resources/views/auth/partials/_form.blade.php --}}
<div class="form-group">
  {!! Form::label('name', 'Nome:', ['class' => 'control-label']); !!}
  {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group">
  {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
  {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group">
  {!! Form::label('password', 'Senha:', ['class' => 'control-label']) !!}
  {!! Form::password('password', ['class' => 'form-control',  'required']) !!}
</div>

<div class="form-group">
  {!! Form::label('password_confirmation', 'Confirme a senha:', ['class' => 'control-label']) !!}
  {!! Form::password('password_confirmation', ['class' =>  'form-control', 'required', 'id' => 'password_confirmation']) !!}
</div>

{!! Form::submit($submit_text, ['class' => 'btn btn-primary']) !!}
