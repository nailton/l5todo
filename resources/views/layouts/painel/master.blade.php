{{-- /resources/views/layouts/painel/master.blade.php --}}
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>L5 Todo - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ elixir("css/all.css") }}">
</head>
<body>
    @include('layouts.painel.partials.top-navbar')
    <div class="container">
        @include('layouts.painel.partials.breadcrumbs')


        @if (Session::has('message'))
        <div class="alert alert-dismissible alert-info">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Heads up!</strong> {{ Session::get('message') }}
        </div>
        @endif

        @if($errors->any())
        <div class="alert alert-dismissible alert-danger">
            @foreach($errors->all() as $error)
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Atenção!</strong> {{ $error }}
            @endforeach
        </div>
        @endif

        <!-- conteudo interno -->
        <div class="container-fluid">
            <div class="row">
                @yield('content')
                <!-- row -->
            </div>
            <!-- / conteudo interno -->
        </div>
        <!-- /container -->
    </div>

    @include('layouts.painel.partials.footer')

</body>
</html>
