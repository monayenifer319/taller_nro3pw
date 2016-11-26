@extends('layouts.plantilla')
@section('titulo', 'Crear compra')
@section('contenido')
    <h1 class="text-center">Crear compras</h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Inicio</a></li>
        <li><a href="{{route('compras.index')}}">Compras</a></li>
        <li class="active">Editar compra</li>
    </ol>
    <!-- Formulario -->
    <div class="col-md-8 col-md-offset-2">
        <form action="{{route('compras.update', $compra->id)}}" method="POST">
            {{csrf_field()}}
            <div class="form-group{{ $errors->has('fecha_registro') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>fecha de registro</label>
                    <input type="text" value="{{old('fecha_registro')}}" name="fecha_registro" required class="form-control" placeholder="Ingrese fecha de registro">
                    @if ($errors->has('nombre'))
                        <span class="help-block">
                            <strong>{{ $errors->first('fecha_registro') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('valor') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Valor</label>
                    <input type="text" value="{{old('valor')}}" name="valor" required class="form-control" placeholder="Ingrese el valor">
                    @if ($errors->has('valor'))
                        <span class="help-block">
                            <strong>{{ $errors->first('valor') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('cantidad') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Cantidad</label>
                    <input type="cantidad" value="{{old('cantidad')}}" name="cantidad" class="form-control" required placeholder="Ingrese la cantidad">
                    @if ($errors->has('cantidad'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cantidad') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Editar compra</button>
                <a href="{{route('compras.index')}}" class="btn btn-danger">Volver Atrás</a>
            </div>
        </form>
    </div>
    <!-- Fin Formulario-->
@endsection