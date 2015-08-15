{{-- /resources/views/layouts/painel/master.blade.php --}}
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @section('head-title')
    <title>L5 Todo - @yield('title')</title>
    @stop
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ elixir("css/all.css") }}">
</head>

<body class="nav-md">
    <div class="container body">

        <div class="main_container">

            @if (Session::has('message'))

            <div class="flash alert-info">

                <p>{{ Session::get('message') }}</p>

            </div>

            @endif

            @include('layouts.painel.partials.body-sidebar')
            @include('layouts.painel.partials.body-top-navigation')

            <div class="right_col" role="main">

                @if($errors->any())

                <div class="flash alert-danger">

                    @foreach($errors->all() as $error)

                    <p>{{ $error }}</p>

                    @endforeach

                </div>

                @endif

                @yield('content')
                @include('layouts.painel.partials.body-footer')

            </div>

        </div>

    </div>

    @include('layouts.painel.partials.notifications')
    @include('layouts.painel.partials.footer')

</body>
</html>
