@if (Session::has('message'))
<div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Parabéns!</strong> {{ Session::get('message') }}
</div>
@endif

@if($errors->any())
<div class="alert alert-dismissible alert-warning">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Atenção!</strong>
    @foreach($errors->all() as $error)
    {{ $error }}
    @endforeach
</div>
@endif
