<html>
  <head>
    @include('layout.header')
    <title>Carlitos'team @yield('header-title')</title>
  </head>
  <body>
    @include('layout.menu')

    <div class="container">
      <!-- Page Heading/Breadcrumbs -->
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">
                @yield('title')
                <small>@yield('description')</small>
              </h1>
              <ol class="breadcrumb">
                  <li><a href="/">Home</a>
                  </li>
                  <li class="active">@yield('path')</li>
              </ol>
          </div>
      </div>
      <!-- /.row -->
      @yield('content')
    </div>
    @include('layout.footer')
  </body>
  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-97187450-1', 'auto');
      ga('send', 'pageview');

  </script>
</html>
