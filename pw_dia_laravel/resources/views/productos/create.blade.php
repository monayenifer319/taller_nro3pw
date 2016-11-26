@extends('layouts.plantilla')
@section('titulo', 'Crear productos')
@section('contenido')
    <h1 class="text-center">Crear Producto</h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Inicio</a></li>
        <li><a href="{{route('productos.index')}}">Usuarios</a></li>
        <li class="active">Crear Usuarios</li>
    </ol>
    <!-- Formulario -->
    <div class="col-md-8 col-md-offset-2">
        <form action="{{route('productos.store')}}" method="POST">
            {{csrf_field()}}
            <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" value="{{old('nombre')}}" name="nombre" required class="form-control" placeholder="Ingrese Nombre del producto">
                    @if ($errors->has('nombre'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Apellido</label>
                    <input type="text" value="{{old('descripcion')}}" name="descripcion" required class="form-control" placeholder="Ingrese descripcion del producto">
                    @if ($errors->has('descripcion'))
                        <span class="help-block">
                            <strong>{{ $errors->first('descripcion') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('precio') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>precio</label>
                    <input type="text"  name="precio" required class="form-control" placeholder="Ingrese precio">
                </div>
            </div>
            <div class="form-group{{ $errors->has('fecha_registro') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Correo Electrónico</label>
                    <input type="fecha_registro" value="{{old('email')}}" name="fecha_registro" class="form-control" required placeholder="Ingrese fecha_registro">
                    @if ($errors->has('fecha_registro'))
                        <span class="help-block">
                            <strong>{{ $errors->first('fecha_registro') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('cantidad') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>cantidad</label>
                    <input type="text" value="{{old('cantidad')}}" name="cantidad" class="form-control" required placeholder="Ingrese la cantidad">
                    @if ($errors->has('cantidad'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cantidad') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('dajunto_producto') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Teléfono</label>
                    <input type="number" value="{{old('dajunto_producto')}}" name="dajunto_producto" class="form-control" required placeholder="">
                    @if ($errors->has('dajunto_producto'))
                        <span class="help-block">
                            <strong>{{ $errors->first('dajunto_producto') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Crear Producto</button>
                <a href="{{route('productos.index')}}" class="btn btn-danger">Volver Atrás</a>
            </div>
        </form>
    </div>
    <!-- Fin Formulario-->
@endsection