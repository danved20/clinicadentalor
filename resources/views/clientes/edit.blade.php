@extends('layout/template')
@section('title','Editar Clientes')
@section('contenido')
<main>
    <div class="container py-4">
        <h2>Editar Clientes</h2>
        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{url('clientes/'.$cliente->id)}}" method="post" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <label for="nombre" class="col-sm-2 form-label">Nombre Completo</label>
            <div class="col-sm-5">
                    <input type="text" class="form-control" name="nombre" id="nombre" value='{{$cliente->nombre}}' required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="fecha_nac" class="col-sm-2 form-label">Fecha de Nacimiento</label>
            <div class="col-sm-5">
                    <input type="date" class="form-control" name="fecha_nac" id="fecha_nac" value='{{$cliente->fecha_nac}}' required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="celular" class="col-sm-2 form-label">Celular</label>
            <div class="col-sm-5">
                    <input type="text" class="form-control" name="celular" id="celular" value='{{$cliente->celular}}' required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 form-label">Email</label>
            <div class="col-sm-5">
                    <input type="email" class="form-control" name="email" id="email" value='{{$cliente->email}}' required>
            </div>
        </div>
        <div class="form-group">
            <label>Foto</label>
            <input type="file" name="foto" class="form-control"/>
            @if($errors->has('image'))
            <span class="text-danger">{{$errors->first('foto')}}</span>
            @endif
        </div>

        <a href="{{url('clientes')}}" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn button-successy">Guardar</button>
    </form>
    </div>
</main>
