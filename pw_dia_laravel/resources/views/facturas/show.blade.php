@extends('layouts.plantilla')
@section('titulo', 'Crear factura')
@section('contenido')
    <h1 class="text-center">Crear factura</h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Inicio</a></li>
        <li><a href="{{route('facturas.index')}}">Facturas</a></li>
        <li class="active">Crear facturas</li>
    </ol>
    <!-- Formulario -->
    <div class="col-md-8 col-md-offset-2">
        <form action="#" method="POST">
            {{csrf_field()}}
            <div class="form-group{{ $errors->has('fecha_factura') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Fecha factura</label>
                    <input type="text" value="{{old('fecha_factura')}}" name="fecha_factura" required class="form-control" placeholder="Ingrese la  fecha de factura">
                    @if ($errors->has('fecha_factura'))
                        <span class="help-block">
                            <strong>{{ $errors->first('fecha_factura') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('nombre_producto') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>nombre producto</label>
                    <input type="text" value="{{old('nombre_producto')}}" name="nombre_producto" required class="form-control" placeholder="Ingrese el nombre del producto">
                    @if ($errors->has('nombre_producto'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nombre_producto') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Crear factura</button>
                <a href="{{route('facturas.index')}}" class="btn btn-danger">Volver Atrás</a>
            </div>
        </form>
    </div>
    <!-- Fin Formulario-->
@endsection