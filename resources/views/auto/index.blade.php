@extends('layouts.master')
@section('cabecera')
    <br>
    <h2>Lista de Autos</h2>
@stop
@section('contenido')
    <a href="auto/create" class="btn btn-primary"> Nuevo</a>
    <table class="table table-bordered table-responsive" style="margin-top: 10px;">
        <thead>
        <tr>
            <th>ID</th>
            <th>Placa</th>
            <th>Color</th>
        </tr>

        </thead>
        <tbody>
        @foreach($autos as $auto)
        <tr>
            <td>{{ $auto->id }}</td>
            <td>{{ $auto->placa }}</td>
            <td>{{ $auto->color }}</td>
            <td>
                <a href="{{ route('auto.edit', $auto->id) }}" class="btn btn-success">Editar</a>
            </td>

            <td>
                {!! Form::open(['method'=>'delete', 'route'=>['auto.destroy', $auto->id]]) !!}
                {!! Form::submit('Eliminar', ['class'=>'btn btn-danger', 'onclick'=>'return confirm("¿Esta seguro que desea eliminar el auto?")']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        </tbody>

    </table>
@stop

