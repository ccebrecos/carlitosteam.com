@extends('layout.base')
@section('header-title','| Records')
@section('title', 'Records')
@section('description', 'Las mejores marcas de nuestros atletas')
@section('path', 'Records')
@section('content')
<div class="row">
  <h2 class="text-center"> Records Aire libre </h2>
  <table class="table table-striped table-hover text-center col-lg-12">
    <tr class="info">
     <th class='text-center'> Fecha </th>
     <th class='text-center'> Atleta</th>
     <th class='text-center'> Marca</th>
     <th class='text-center'> Prueba</th>
     <th class='text-center'> Marca</th>
     <th class='text-center'> Atleta</th>
     <th class='text-center'> Fecha </th>
    </tr>
  @foreach($results['AL'] as $result => $data )
    <tr>
    @if($data['masc']['result'])
      <td> {{$data['masc']['date']}} </td>
      <td> {{$data['masc']['athlete']['name']." ".$data['masc']['athlete']['surname']}} </td>
      <td> {{$data['masc']['result']}} </td>
    @else
      <td> - </td>
      <td> - </td>
      <td> - </td>
    @endif
    <td> {{$result}} </td>
    @if($data['fem']['result'])
      <td> {{$data['fem']['result']}} </td>
      <td> {{$data['fem']['athlete']['name']." ".$data['fem']['athlete']['surname']}} </td>
      <td> {{$data['fem']['date']}} </td>
    @else
      <td> - </td>
      <td> - </td>
      <td> - </td>
    @endif
    </tr>
  @endforeach

  </table>
</div>
<div class="row">
  <h2 class="text-center"> Records Pista Cubierta </h2>
  <table class="table table-striped table-hover text-center col-lg-12">
    <tr class="danger">
      <th class='text-center'> Fecha </th>
      <th class='text-center'> Atleta</th>
      <th class='text-center'> Marca</th>
      <th class='text-center'> Prueba</th>
      <th class='text-center'> Marca</th>
      <th class='text-center'> Atleta</th>
      <th class='text-center'> Fecha </th>
    </tr>

    @foreach($results['PC'] as $result => $data )
      <tr>
      @if($data['masc']['result'])
        <td> {{$data['masc']['date']}} </td>
        <td> {{$data['masc']['athlete']['name']." ".$data['masc']['athlete']['surname']}} </td>
        <td> {{$data['masc']['result']}} </td>
      @else
        <td> - </td>
        <td> - </td>
        <td> - </td>
      @endif
      <td> {{$result}} </td>
      @if($data['fem']['result'])
        <td> {{$data['fem']['result']}} </td>
        <td> {{$data['fem']['athlete']['name']." ".$data['fem']['athlete']['surname']}} </td>
        <td> {{$data['fem']['date']}} </td>
      @else
        <td> - </td>
        <td> - </td>
        <td> - </td>
      @endif
      </tr>
    @endforeach
  </table>
</div>
@endsection
