@extends('layouts.plantilla')
@section('titulo', 'Crear producto')
@section('contenido')
    <h1 class="text-center">Crear productos</h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Inicio</a></li>
        <li><a href="{{route('productos.index')}}">Producto</a></li>
        <li class="active">Editar producto</li>
    </ol>
    <!-- Formulario -->
    <div class="col-md-8 col-md-offset-2">
        <form action="{{route('productos.update', $usuario->id)}}" method="POST">
            {{csrf_field()}}
            <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" value="{{old('nombre')}}" name="nombre" required class="form-control" placeholder="Ingrese Nombre">
                    @if ($errors->has('nombre'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Descripcion</label>
                    <input type="text" value="{{old('descripcion')}}" name="descripcion" required class="form-control" placeholder="Ingrese la descripcion">
                    @if ($errors->has('descripcion'))
                        <span class="help-block">
                            <strong>{{ $errors->first('descripcion') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('precio') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Precio</label>
                    <input type="text" value="{{old('precio')}}" name="precio" class="form-control" required placeholder="Ingrese el precio">
                    @if ($errors->has('precio'))
                        <span class="help-block">
                            <strong>{{ $errors->first('precio') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('fecha_registro') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Fecha de registro</label>
                    <input type="text" value="{{old('fecha_registtro')}}" name="fecha_registro" class="form-control" required placeholder="Ingrese fecha de registro">
                    @if ($errors->has('fecha_registro'))
                        <span class="help-block">
                            <strong>{{ $errors->first('fecha_registro') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('cantidad') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Cantidad</label>
                    <input type="number" value="{{old('cantidad')}}" name="cantidad" class="form-control" required placeholder="Ingrese la cantidad">
                    @if ($errors->has('cantidad'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cantidad') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Editar producto</button>
                <a href="{{route('producto.index')}}" class="btn btn-danger">Volver Atrás</a>
            </div>
        </form>
    </div>
    <!-- Fin Formulario-->
@endsection