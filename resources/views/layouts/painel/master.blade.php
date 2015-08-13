{{-- /resources/views/layouts/painel/master.blade.php --}}
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    {{-- Meta, title, CSS, favicons, etc. --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- titulo site com default --}}
    @section('head-title')
    <title>L5 Todo</title>
    @stop

    {{-- Bootstrap core CSS --}}
    {{-- styles e custom --}}
    <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}">


</head>
<body>

  {{-- Part: sidebar --}}
  @section('layouts.painel.partials.body-sidebar')
  {{-- Part: profile --}}
  @include('layouts.painel.partials.side-profile')
  {{-- Part: menu de navegação --}}
  @include('layouts.painel.partials.side-navbar')
  {{-- Part: configuracoes, logout e etc --}}
  @include('layouts.painel.partials.side-tools')
  @show

  {{-- navegacao top --}}
  @yield('layouts.painel.partials.body-top-navigation')

  {{-- Part: create main content of the page --}}
  {{-- @yield('paienl::body-content') --}}
  @yield('content')
  {{-- footer --}}
  @section('layouts.painel.partials.body-footer')
  {{-- rodapé provavelmente é compartilhado por muitas páginas --}}
  @include('layouts.painel.partials.footer')
  @show

  {{-- notificacoes --}}
  @yield('layouts.painel.partials.notifications')

</body>
</html>