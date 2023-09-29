@extends('layout/template')
@section('title','Horarios de la Clínica')
@section('contenido')
<main>
    <div class="col-lg-12"  style="background-color:#fef5f5">
    <h1>Lista de Horarios</h1>
    <a href="{{('horarios/create')}}" class="btn btn-primary btn-sm">Nuevo Registro</a>
    </div>
    <table class="table">
        <thead class="table-light">
        <td colspan="3">
            <tr>
                <td>#Id</td>
                <td>Hora</td>
                <td>Operaciones</td>
            </tr>
        </td>
        </thead>
    </table>
        <tbody>
        <tr>
            <td colspan="3">
            <table class="table mb-0">
                @foreach ($horarios as $horario)
                <tr>
                <td>{{$horario->id}}</td>
                <td>{{$horario->hora}}</td>

                <td><a href="{{url('horarios/'.$horario->id.'/edit')}}" class="btn btn-warning btn-sm">Editar</a></td>
                <td><form action="{{url('horarios/'.$horario->id)}}" method="post">
                @method("DELETE")
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Eliminar </button>
                </form>
                </td>
                @endforeach
            </table>
            </td>
        </tr>
        </tbody>
    </table>
</main>