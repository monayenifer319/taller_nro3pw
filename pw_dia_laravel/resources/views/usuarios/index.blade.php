@extends('layouts.plantilla')
@section('titulo', 'Index Usuarios')
@section('contenido')
    <h1 class="text-center">Listado de Usuarios</h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Inicio</a></li>
        <li><a href="{{route('usuarios.index')}}">Usuarios</a></li>
        <li class="active">Index</li>
    </ol>
    @if(Session::has('alert'))
        <div class="alert alert-success">{!!  Session::get('alert') !!}</div>
    @endif
    <div class="col-md-10 col-md-offset-1">
        <a href="{{route('usuarios.create')}}" class="btn btn-success"><i class="fa fa-user" aria-hidden="true"></i> Crear Usuario</a>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <!-- Datatables -->
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Opciones</th>
            </tr>
            </tfoot>
            <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->nombre}}</td>
                    <td>{{$usuario->apellido}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>
                        <a href="{{route('usuarios.show', $usuario->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Ver"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                        <a href="{{route('usuarios.edit', $usuario->id)}}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit" aria-hidden="true"></i></a>
                        <a href="{{url('usuarios/eliminar', $usuario->id)}}" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <!-- fin Datatables -->
    </div>
    @section('scripts')

        @include('scripts.datatable_tooltip')


    @endsection
@endsection
