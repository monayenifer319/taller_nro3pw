@extends('layouts.plantilla')
@section('titulo', 'Crear Usuario')
@section('contenido')
    <h1 class="text-center">Crear Usuarios</h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Inicio</a></li>
        <li><a href="{{route('usuarios.index')}}">Usuarios</a></li>
        <li class="active">Editar Usuarios</li>
    </ol>
    <!-- Formulario -->
    <div class="col-md-8 col-md-offset-2">
        <form action="{{route('usuarios.update', $usuario->id)}}" method="POST">
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
            <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Apellido</label>
                    <input type="text" value="{{old('apellido')}}" name="apellido" required class="form-control" placeholder="Ingrese Apellido">
                    @if ($errors->has('apellido'))
                        <span class="help-block">
                            <strong>{{ $errors->first('apellido') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password"  name="password" required class="form-control" placeholder="Ingrese Contraseña">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Repetir Contraseña</label>
                    <input type="password" name="password_confirmation" required class="form-control" placeholder="Repetir Contraseña">
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Correo Electrónico</label>
                    <input type="email" value="{{old('email')}}" name="email" class="form-control" required placeholder="Ingrese Correo Electrónico">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Dirección</label>
                    <input type="text" value="{{old('direccion')}}" name="direccion" class="form-control" required placeholder="Ingrese Dirección">
                    @if ($errors->has('direccion'))
                        <span class="help-block">
                            <strong>{{ $errors->first('direccion') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Teléfono</label>
                    <input type="number" value="{{old('telefono')}}" name="telefono" class="form-control" required placeholder="Ingrese Teléfono">
                    @if ($errors->has('telefono'))
                        <span class="help-block">
                            <strong>{{ $errors->first('telefono') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Editar usuario</button>
                <a href="{{route('usuarios.index')}}" class="btn btn-danger">Volver Atrás</a>
            </div>
        </form>
    </div>
    <!-- Fin Formulario-->
@endsection