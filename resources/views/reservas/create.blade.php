@extends('layout/template')
@section('title','Insertar Reservas')
@section('contenido')
<main>
    <div class="container py-4">
        <h2>Insertar Reservas</h2>
        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{url('reservas')}}" method="post">
        @csrf
        <div class="mb-3 row">
            <label for="fecha" class="col-sm-2 form-check-label">Fecha</label>
            <div class="col-sm-5">
                <input type="date" class="form-control" name="fecha" id="fecha" value='{{old('fecha')}}' required>
        </div>
        </div>
        <div class="mb-3 row">
            <label for="horario" class="col-sm-2 col-form-label">Horario</label>
            <div class="col-sm-5">
                    <select name="hora" id="hora" class="form-select" required>
                        <option value="">Seleccionar Horario</option>
                        @foreach ($horarios as $horario)
                        <option value="{{$horario->id}}">{{$horario->hora}}</option>
                        @endforeach
                    </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="cliente"="col-sm-2 col-form-label">Cliente</label>
            <div class="col-sm-5">
                    <select name="nombre" id="nombre" class="form-select" required>
                        <option value="">Seleccionar Cliente</option>
                        @foreach ($clientes as $cliente)
                        <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                        @endforeach
                    </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="obs" class="col-sm-2 form-check-label"></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="obs" id="obs" value='obs' required>
           </div>
        </div>

        <a href="{{url('reservas')}}" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
        
    </form>
    </div>
</main>