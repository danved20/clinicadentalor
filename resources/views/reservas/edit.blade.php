@extends('layout/template')
@section('title','Editar Horarios')
@section('contenido')
<main>
    <div class="container py-4">
        <h2>Editar Horarios</h2>
        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{url('reservas/'.$reserva->id)}}" method="post" >
        @csrf
        @method('PUT')

        <div class="mb-3 row">
            <label for="fecha" class="col-sm-2 form-check-label">Fecha</label>
            <div class="col-sm-5">
                <input type="date" class="form-control" name="fecha" id="fecha" value='{{$reserva->fecha}}' required>
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
            <label for="nombre"="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-5">
                    <select name="nombre" id="nombre" class="form-select" required>
                        <option value="">Seleccionar Cliente</option>
                        @foreach ($clientes as $cliente)
                        <option value="{{$cliente->id}}">{{$cliente->nombre}}
                        </option>
                        @endforeach
                    </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="obs" class="col-sm-2 form-check-label"></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="obs" id="obs" value='obs' value='{{$reserva->obs}}'required>
        </div>
        </div>

        <button type="submit" class="btn button-successy">Guardar</button>
    </form>
    </div>
</main>