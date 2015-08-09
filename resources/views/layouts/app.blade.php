<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
<head>
  <title>App Name - @yield('title')</title>
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

</body>
</html>