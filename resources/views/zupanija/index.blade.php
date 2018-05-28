{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Županije Admin panel')

@section('content_header')
    <h1>Županije {{ App\Zupanija::all()->count()}}</h1>
@stop

@section('content')
  
    @foreach ($zup as $z)
    <li><a href="/zupanija/{{ $z->id }}">{{ $z->naziv }}</a></li>
    @endforeach

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

