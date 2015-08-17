@if (!$projetos_list->count())
<div class="alert alert-dismissible alert-info">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Oops!</strong> Você não tem projetos, crie um projeto ao lado.
</div>
@else

<div class="form-group">
  {!! Form::label('name', 'Projeto:', array('class'=>'col-lg-2 control-label')) !!}
  <div class="col-lg-10">
    {!! Form::select('project_id', $projetos_list, null, ['class' => 'form-control',
    ]) !!}
  </div>
</div>
@endif

<div class="form-group">
  {!! Form::label('name', 'Nome:', array('class'=>'col-lg-2 control-label')) !!}
  <div class="col-lg-10">
    {!! Form::text('name', '', array('class'=>'form-control','placeholder'=> 'Nome da tarefa')) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('slug', 'Slug:', array('class'=>'col-lg-2 control-label')) !!}
  <div class="col-lg-10">
    {!! Form::text('slug', '', array('class'=>'form-control','placeholder'=> 'slug-da-tarefa')) !!}
    <div class="checkbox">
      <label>
        {!! Form::checkbox('completed') !!}
        Completado?
      </label>
    </div>
  </div>
</div>

<div class="form-group">
  {!! Form::label('description', 'Description:', array('class'=>'col-lg-2 control-label')) !!}
  <div class="col-lg-10">
    {!! Form::textarea('description', '', array('rows' => 3)) !!}
    <span class="help-block">Escreve o que você achar necessário sobre a tarefa.</span>
  </div>
</div>

<div class="form-group">
  <div class="col-lg-10 col-lg-offset-2">
    {!! Form::submit($submit_text, ['class' => 'btn btn-primary']) !!}
  </div>
</div>
