@extends('adminlte::master')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('right-sidebar')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('content')
    @include('includes.navbar')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
    <link rel="stylesheet" href="/vendor/adminlte/css/adminlte.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop