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
</html>
