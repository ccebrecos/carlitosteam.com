<html>
  <head>
    @include('layout.header')
    <title>Carlitos'team</title>
    <link rel="icon" src="{{URL::asset('icon/logo.png')}}" type="image/gif">
  </head>
  <body>
    @include('layout.menu')
    <header id="myCarousel" class="carousel slide">
      @yield('header')
    </header>
    <div class="container">
      @yield('content')
    </div>
    @include('layout.footer')
  </body>
</html>
