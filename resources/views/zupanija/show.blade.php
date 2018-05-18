{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Županije Admin panel')

@section('content_header')
    <h1>Županija {{ $zup->naziv}}</h1>
@stop

@section('content')
  
Naziv: <span style="font-style: italic">{{ $zup->naziv}} </span><br>
Datum kreiranja: {{ $zup->created_at}} <br>
Broj: {{ $zup->id}} <br>

<br>
<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Edit">
					</div>
<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-warning btn-block" value="Delete">
					</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

