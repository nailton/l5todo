{{-- /resources/views/projects/partials/_form.blade.php --}}
<div class="form-group">
  {!! Form::label('name', 'Nome:', array('class'=>'col-lg-2 control-label')) !!}
  <div class="col-lg-10">
    {!! Form::text('name', null, array('class'=>'form-control','placeholder'=> 'Nome do projeto')) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('slug', 'Slug:', array('class'=>'col-lg-2 control-label'))  !!}
  <div class="col-lg-10">
    {!! Form::text('slug', null, array('class'=>'form-control','placeholder'=> 'slug-do-projeto')) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-lg-10 col-lg-offset-2">
    <br>
    {!! Form::submit($submit_text, ['class' => 'btn btn-primary']) !!}
  </div>
</div>
