@extends('layout.main')

@section('header')
<!-- Header Carousel -->
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('https://c1.staticflickr.com/4/3951/33119866943_105ce389a3_b.jpg   One');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('https://c1.staticflickr.com/3/2932/33932925245_635df85bc6_b.jpg Two');"></div>
                <div class="carousel-caption">
                    <h2>Berlín - 2009</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('https://c1.staticflickr.com/3/2808/33777971602_01bdc6a7d7_b.jpg Three');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('https://c1.staticflickr.com/6/5675/22689168631_9da8524f58_k.jpg Four');"></div>
                <div class="carousel-caption">
                    <h2>Campionat del Vallès - 2015</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('https://c1.staticflickr.com/6/5771/21574955249_23ee9faf79_k.jpg Five');"></div>
                <div class="carousel-caption">
                    <h2>Criterium Josep Capmany - 2015</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

        <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
        </script>

        <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header text-center">
                  Bienvenido a la web oficial de Carlitos'team
              </h1>
          </div>
        </div>
@endsection
