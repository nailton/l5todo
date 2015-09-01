{{-- /resources/views/auth/header.blade.php --}}
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
    <div class="container">
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

    @include('auth.footer')
    <script src="{{ elixir("js/app.js") }}"></script>
</body>
</html>
