@extends('layouts.app')

@section('content')
<div class="container">
    <nav>
        <a href="clientes/">clientes</a> <br>
        <a href="reservas/">reservas</a> <br>
        <a href="horarios/">horarios</a> <br>
        <a href="{{ url('/reporte') }}" target="_blank" class="btn btn-primary">ver Reporte</a>
        <a href="{{ url('/desreporte') }}" target="_blank" class="btn btn-primary">Descargar Reporte</a>

    </nav>
</div>  
@endsection