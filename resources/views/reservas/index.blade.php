@extends('layout/template')
@section('title','Reserva de Horario')
@section('contenido')
<main>
    <div class="container py=4">
        <h2>Listado de Reserva</h2>
        <a href="{{('reservas/create')}}" class="btn btn-primary btn-sm">Crear nuevo Registro</a>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#id</th>
                <th>Fecha</th>
                <th>id_cliente</th>
                <th>id_horario</th>
                <th>obs</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservas as $reserva)
            <tr>
                <td>{{$reserva->id}}</td>
                <td>{{$reserva->fecha}}</td>
                <td>{{$reserva->horario->hora}}</td>
                <td>{{$reserva->cliente->nombre}}</td>
                <td>{{$reserva->obs}}</td>
                <td><a href="{{url('reservas/'.$reserva->id.'/edit')}}"class="btn btn-warning btn-sm">Editar</a>
                </td>
                <td>
                    <form action="{{url('reservas/'.$reserva->id)}}" method="post">
                        @method("DELETE")
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>

                    </form>
                </td>
                @endforeach
            </tr>
        </tbody>
    </table>
</main>