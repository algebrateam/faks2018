{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Mjesta Admin panel')

@section('content_header')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin">Fakultet</a></li>
    <li class="breadcrumb-item active" aria-current="page">Mjesta</li>
  </ol>
</nav>
<h1>Mjesta <span  class="badge badge-secondary">{{ $m->count()}}</span></h1>
@stop

@section('content')


<ul  class="list-group">
    @foreach ($m as $mjesto)
    <li  class="list-group-item list-group-item-secondary">
      <a href="/mjesto/{{ $mjesto->id }}">{{ $mjesto->naziv }} ({{ $mjesto->pbr }})</a></li>
    @endforeach
</ul>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

