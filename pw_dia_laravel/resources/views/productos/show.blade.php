@extends('layouts.plantilla')
@section('titulo', 'Crear productos')
@section('contenido')
    <h1 class="text-center">Crear producto</h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Inicio</a></li>
        <li><a href="{{route('productos.index')}}">Productos</a></li>
        <li class="active">Crear producto</li>
    </ol>
    <!-- Formulario -->
    <div class="col-md-8 col-md-offset-2">
        <form action="#" method="POST">
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
            <div class="form-group{{ $errors->has('precio') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Precio</label>
                    <input type="text" value="{{old('precio')}}" name="apellido" required class="form-control" placeholder="Ingrese el precio">
                    @if ($errors->has('precio'))
                        <span class="help-block">
                            <strong>{{ $errors->first('precio') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Correo Descripciono</label>
                    <input type="descripcion" value="{{old('descripcion')}}" name="email" class="form-control" required placeholder="Ingrese la descripcion">
                    @if ($errors->has('descripcion'))
                        <span class="help-block">
                            <strong>{{ $errors->first('descripcionl') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('fecha_registro') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Fecha de registro</label>
                    <input type="text" value="{{old('fecha_registro')}}" name="fecha_registro" class="form-control" required placeholder="Ingrese fecha de registro">
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
                <button type="submit" class="btn btn-primary">Crear Usuario</button>
                <a href="{{route('productos.index')}}" class="btn btn-danger">Volver Atrás</a>
            </div>
        </form>
    </div>
    <!-- Fin Formulario-->
@endsection