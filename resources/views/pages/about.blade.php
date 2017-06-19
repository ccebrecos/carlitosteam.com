@extends('layout.base')
@section('header-title','| About')
@section('title','Qui som?')
@section('description', 'Sobre nosaltres')
@section('path', 'About')

@section('content')
<div class="row">
    <div class="col-md-6">
        <img class="img-responsive" src="{{URL::asset('img/grupo.jpg')}}" alt="equip" width="750" height="450">
    </div>
    <div class="col-md-6">
        <h2>¿Quiénes somos?</h2>
        <p>Carlitos'team es un grupo de entreno con atletas pertenecientes en su mayoría a la <a href="http://www.atletisme.com/clubs/jas/">Joventut Atlètica Sabadell</a>.</p>
        <p></p>
        <p></p>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">Our Team</h2>
    </div>

    @foreach($athletes as $athlete)

    <div class="col-md-4 text-center">
      <div class="thumbnail">

          @if($athlete->img_path)
          <img class="img-responsive" src="{{$athlete->img_path}}" alt="{{$athlete->name}}">
          @else
          <img class="img-responsive" src="http://placehold.it/750x450" alt="{{$athlete->name}}">
          @endif

          <div class="caption">
              <h3>{{$athlete->name." ".$athlete->surname}}<br>
                  <small>{{$athlete->role}}</small>
              </h3>
              <p>{{$athlete->license}}
              <p>{{$athlete->habilities}}</p>
          </div>
      </div>
    </div>


    @endforeach

</div>
@endsection
