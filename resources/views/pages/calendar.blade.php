@extends('layout.base')
@section('header-title','| Calendar')
@section('title', 'Calendar')
@section('description', 'Competicions i esdeveniments importants')
@section('path', 'Calendar')

@section('content')
<!-- Page Heading/Breadcrumbs -->
<!-- Image Header -->
<div class="row">
    <div class="col-md-12">
        <img class="img-responsive" src="{{URL::asset('img/calendar.jpg')}}" alt="calendar" height="300" width="1200">
    </div>
</div>
<!-- /.row -->

<hr>
<div class="row">
<div class="text-center col-lg-12">
<iframe  src="https://calendar.google.com/calendar/embed?title=Carlitos%27team%20Calendar&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23ffcc66&amp;src=ncri9v8ea996blhlpr1mfuegq4%40group.calendar.google.com&amp;color=%231B887A&amp;ctz=Europe%2FMadrid" style="border:solid 1px #777" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
</div>
</div>
@endsection
