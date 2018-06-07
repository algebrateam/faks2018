{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dvorana uredjivanja')

@section('content_header')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin">Fakultet</a></li>
    <li class="breadcrumb-item"><a href="/dvorana">Dvorana</a></li>
    <li class="breadcrumb-item active" aria-current="#">{{ $dvo->naziv}}</li>
  </ol>
</nav>
<h1>Uredi dvoranu{{ $dvo->naziv}}</h1>
@stop

@section('content')

<br>
<!-- will be used to show any messages -->
@if (Session::has('message'))

	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<hr>
<div>
  <!-- TODO: pogledaj verziju 5.5 -->

  <form  action="{{action('DvoranaController@update', $dvo->id)}}" method="post">
    @csrf
    <input name="_method" type="hidden" value="PUT">

    <div>
      {{-- Form::label('id','Šifra dvorane') --}}
      <input readonly type="number" value="{{ $dvo->id}}" name='id' class='form-control'>
    </div>
    <div>
      {{-- Form::label('naziv','Naziv') --}}
      <input type="text" maxlength="40" value="{{ $dvo->naziv}}" name='naziv' class='form-control'>
    </div>
        <div>
      {{-- Form::label('brojmjesta','Broj mjesta') --}}
      <input type="text" value="{{ $dvo->brojmjesta}}" name='brojmjesta' class='form-control'>
    </div>
    <br>
    <div class="col-xs-6 col-sm-6 col-md-6">
      <input type="submit" class="btn btn-lg btn-success btn-block" value="Edit">
    </div>

  </form>
  <form action="{{action('DvoranaController@destroy', $dvo->id)}}" method="post">
    @csrf
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

