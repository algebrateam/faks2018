{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Županije Admin panel')

@section('content_header')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin">Fakultet</a></li>
    <li class="breadcrumb-item"><a href="/zupanija">Županije</a></li>
    <li class="breadcrumb-item active" aria-current="#">{{ $zup->naziv}}</li>
  </ol>
</nav>
<h1>Uredi županiju {{ $zup->naziv}}</h1>
@stop

@section('content')



<br>

<hr>
<div>
  <!-- TODO: pogledaj verziju 5.5 -->

  <form  action="{{action('ZupanijaController@update', $zup->id)}}" method="post">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">

    <div>
      {{-- Form::label('id','Šifra zupanije') --}}
      <input readonly type="number" value="{{ $zup->id}}" name='id' class='form-control'>
    </div>
    <div>
      {{-- Form::label('naziv','Naziv zupanije') --}}
      <input type="text" maxlength="40" value="{{ $zup->naziv}}" name='naziv' class='form-control'>
    </div>
    <br>
    <div class="col-xs-6 col-sm-6 col-md-6">
      <input type="submit" class="btn btn-lg btn-success btn-block" value="Edit">
    </div>

  </form>
  <form action="{{action('ZupanijaController@destroy', $zup->id)}}" method="post">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="DELETE">  
    <div class="col-xs-6 col-sm-6 col-md-6">
      <input type="submit" class="btn btn-lg btn-warning btn-block" value="Delete">
    </div>
  </form>
</div>



@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
@stop

