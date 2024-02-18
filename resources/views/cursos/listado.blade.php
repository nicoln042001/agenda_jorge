@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-12">
        <a class="btn btn-primary" href="{{ route('cursos.crear') }}">Crear</a>
    </div>
    <table class="table table-striped">
        <thead>
            <th>Usuario</th>
            <th>Jornada</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
            <tr>
                <td>{{$curso->usuarios->name}}</td>
                <td>{{$curso->id_jornada}}</td>
                <td>{{$curso->fecha_inicio}}</td>
                <td>{{$curso->fecha_fin}}</td>
                <td>

                    <a class="btn btn-primary" href="{{ route('cursos.editar', ['id' => $curso->id]) }}">
                        <i class="bi bi-pencil-square-fill"></i> <i class="bi bi-trash"></i>
                    </a>
                    <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection