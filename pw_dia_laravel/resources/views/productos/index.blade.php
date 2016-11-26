@extends('layouts.plantilla')
@section('titulo', 'Index productos')
@section('contenido')
    <h1 class="text-center">Listado de productos</h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Inicio</a></li>
        <li><a href="{{route('productos.index')}}">Productos</a></li>
        <li class="active">Index</li>
    </ol>
    @if(Session::has('alert'))
        <div class="alert alert-success">{!!  Session::get('alert') !!}</div>
    @endif
    <div class="col-md-10 col-md-offset-1">
        <a href="{{route('productos.create')}}" class="btn btn-success"><i class="fa fa-user" aria-hidden="true"></i> Crear Usuario</a>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <!-- Datatables -->
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>descripcion</th>
                <th>precio</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Nombre</th>
                <th>productos</th>
                <th>precio</th>
                <th>Opciones</th>
            </tr>
            </tfoot>
            <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->descripcio}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>
                        <a href="{{route('productos.show', $producto->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Ver"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                        <a href="{{route('productos.edit', $producto->id)}}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit" aria-hidden="true"></i></a>
                        <a href="{{url('productos/eliminar', $producto->id)}}" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
