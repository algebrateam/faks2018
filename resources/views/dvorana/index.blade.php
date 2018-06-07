{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dvorane Admin panel')

@section('content_header')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin">Fakultet</a></li>
    <li class="breadcrumb-item"><a href="/dvorana">Dvorane</a></li>
    <li class="breadcrumb-item active" aria-current="#">Sve županije</li>
  </ol>
</nav>
    <h1>Dvorane {{ App\Dvorana::all()->count()}}</h1>
@stop

@section('content')
  
    @foreach ($dvo as $d)
    <li><a href="/dvorana/{{ $d->id }}">{{ $d->naziv }}</a></li>
    @endforeach

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

