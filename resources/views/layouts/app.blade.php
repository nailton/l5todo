<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
<head>
  <title>L5 Todo - @yield('title')</title>
  <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}">
</head>
<body>

  <div class="container">

    @if (Session::has('message'))
    <div class="flash alert-info">

      <p>{{ Session::get('message') }}</p>

    </div>
    @endif

    @if($errors->any())
    <div class="flash alert-danger">

      @foreach($errors->all() as $error)
      <p>{{ $error }}</p>
      @endforeach

    </div>
    @endif

    @yield('content')

  </div>
<script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>