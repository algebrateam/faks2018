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
    <h1>Županija {{ $zup->naziv}}</h1>
@stop

@section('content')
  
Naziv: <span style="font-style: italic">{{ $zup->naziv}} </span><br>
Datum kreiranja: {{ $zup->created_at}} <br>
Broj: {{ $zup->id}} <br>

<br>
<div class="col-xs-6 col-sm-6 col-md-6">
  <a href="/zupanija/{{ $zup->id}}/edit" class="btn btn-lg btn-success btn-block">Edit</a>

					</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

