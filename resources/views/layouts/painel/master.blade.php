{{-- /resources/views/layouts/painel/master.blade.php --}}
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @section('head-title')
        <title>L5 Todo</title>
        @stop
        <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}">
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                @include('layouts.painel.partials.body-sidebar')
                @include('layouts.painel.partials.body-top-navigation')
                <div class="right_col" role="main">
                    @yield('content')
                    @include('layouts.painel.partials.body-footer')
                </div>
            </div>
        </div>
        @include('layouts.painel.partials.notifications')
        @include('layouts.painel.partials.footer')
    </body>
</html>