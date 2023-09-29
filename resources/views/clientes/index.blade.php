@extends('layout/template')
@section('title','Clientes de la Clínica')
@section('contenido')
<main>
    <div class="col-lg-12"  style="background-color:#fef5f5">
    <h1>Lista de Clientes</h1>
    <a href="{{('clientes/create')}}" class="btn btn-primary btn-sm">Nuevo Registro</a>
    </div>
    <table class="table">
        <thead class="table-light">
        <td colspan="3">
            <tr>
                <td>#Id</td>
                <td>Nombre</td>
                <td>Fecha Nac.</td>
                <td>Celular</td>
                <td>Email</td>
                <td>Foto</td>
                <td>Operaciones</td>
            </tr>
        </td>
        </thead>
    </table>
        <tbody>
        <tr>
            <td colspan="3">
            <table class="table mb-0">
                @foreach ($clientes as $cliente)
                <tr>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->fecha_nac}}</td>
                <td>{{$cliente->celular}}</td>
                <td>{{$cliente->email}}</td>
                <td>
                    <img src="{{'images/'.$cliente->foto}}" class="rounded-circle" width="50" height="50"/>
                </td>
                <td><a href="{{url('clientes/'.$cliente->id.'/edit')}}" class="btn btn-warning btn-sm">Editar</a></td>
                <td><form action="{{url('clientes/'.$cliente->id)}}" method="post"  enctype="multipart/form-data">
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