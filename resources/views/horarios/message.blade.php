@extends('adminlte::page')
@section('content')
<main>
    <div class="container py-4">
        <h2>{{$msg}}</h2>
        <a href="{{url('horarios')}}" class="btn btn-secondary">Regresar</a>
    <div>
</main>
@stop