@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div class="card">...</div>
    <div class="card card-primary">...</div>
    <div class="card card-secondary">...</div>
    <div class="card card-success">...</div>
    <div class="card card-info">...</div>
    <div class="card card-warning">...</div>
    <div class="card card-danger">...</div>
    <div class="card card-dark">...</div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop