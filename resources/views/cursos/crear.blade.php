@extends('layouts.app')
@section('content')
<div class="container">
    <form method="POST" action="{{ route('cursos.guardar') }}" id="form">
        <div class="row">
            <div class="col-6">
                <label for="">Usuario</label>
                <select class="form-control" name="id_usuario" id="">
                    <option value="">Seleccione..</option>
                    @foreach ($usuarios as $usuario)
                    <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6">
                <label for="">Jornada</label>
                <input type="text" name="id_jornada" class="form-control">
            </div>
            <div class="col-6">
                <label for="">Fecha Inicio</label>
                <input type="date" name="fecha_inicio" class="form-control">
            </div>
            <div class="col-6">
                <label for="">Fecha Fin </label>
                <input type="date" name="fecha_fin" class="form-control">
            </div>
            <div class="col-12 mt-2">
                <button class="btn btn-success" type="submit" id="guardar">Guardar</button>
            </div>
        </div>
    </form>
</div>
@endsection