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
        <form action="{{url('horarios/'.$horario->id)}}" method="post" >
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <label for="nombre" class="col-sm-2 form-label">Hora</label>
            <div class="col-sm-5">
                    <input type="text" class="form-control" name="hora" id="hora" value='{{$horario->hora}}' required>
            </div>
        </div>
        <a href="{{url('horarios')}}" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn button-successy">Guardar</button>
    </form>
    </div>
</main>