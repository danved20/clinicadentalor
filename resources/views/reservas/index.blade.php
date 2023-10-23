@extends('layout/template')
@section('title','Reserva de Horario')
@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/crudreservas.css')}}">
<!--     <script src="{{ asset('assets/js/crudreservas.js') }}"></script>
 --></head>
<body>
    <main>
        <div class="container py=4">
            <h2>Listado de Reserva</h2>
            <a href="{{('reservas/create')}}" class="botoncrear">Crear nuevo Registro</a>
            <a href="{{url('home')}}" class="botoncancelar">Regresar</a>
        </div>
        <table class="table table-hover">
            <thead >
                <tr classs="colum">
                    <th id="tr">Fecha</th>
                    <th id="tr">Horario</th>
                    <th id="tr">Cliente</th>
                    <th id="tr">obs</th>
                    <th id="tr">Editar</th>
                    <th id="tr">Eliminar</th>
                    <th id="tr">#id</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservas as $reserva)
                <tr class="filas">
                    <td id="filas">{{$reserva->id}}</td>
                    <td id="filas">{{$reserva->fecha}}</td>
                    <td id="filas">{{$reserva->horario->hora}}</td>
                    <td id="filas">{{$reserva->cliente->nombre}}</td>
                    <td id="filas">{{$reserva->obs}}</td>
                    <td style="background-color: #8ecae6;">
                        <a href="{{url('reservas/'.$reserva->id.'/edit')}}"class="botonedit" >Editar</a>
                    </td>
                    <td style="background-color: #8ecae6;">
                        <form action="{{url('reservas/'.$reserva->id)}}" method="post" 
                            onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta reserva?');">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btneliminar">Eliminar</button>
                        </form>
                    </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </main>
    
</body>
</html>