@extends('layouts.master')

@section('cabecera')
    <h2>Editar datos del auto</h2>
@stop

@section('contenido')
    {!! Form::model($auto, ['route'=>['auto.update', $auto->id], 'method'=>'PATCH', 'class'=>'form-horizontal']) !!}
    <div class="form-group">
        {!! Form::label('placa', 'Placa', ['class'=>'control-label col-md-2']) !!}
        <div class="col-md-10">
            {!! Form::text('placa', null, ['class'=>'form-control']) !!}
            {!! $errors->has('placa')?$errors->first('placa'):'' !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('color', 'Color', ['class'=>'control-label col-md-2']) !!}
        <div class="col-md-10">
            {!! Form::text('color', null, ['class'=>'form-control']) !!}
            {!! $errors->has('color')?$errors->first('color'):'' !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
        </div>
    </div>
    {!! Form::close() !!}
@stop