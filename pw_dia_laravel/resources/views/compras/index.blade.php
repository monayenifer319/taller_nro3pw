@extends('layouts.plantilla')
@section('titulo', 'Index compras')
@section('contenido')
    <h1 class="text-center">Listado de compras</h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Inicio</a></li>
        <li><a href="{{route('compras.index')}}">Compras</a></li>
        <li class="active">Index</li>
    </ol>
    @if(Session::has('alert'))
        <div class="alert alert-success">{!!  Session::get('alert') !!}</div>
    @endif
    <div class="col-md-10 col-md-offset-1">
        <a href="{{route('compras.create')}}" class="btn btn-success"><i class="fa fa-user" aria-hidden="true"></i> Crear compra</a>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <!-- Datatables -->
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>fecha de registro</th>
                <th>valor</th>
                <th>cantidad</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>fecha de registro</th>
                <th>Valor</th>
                <th>Cantidad</th>
                <th>Opciones</th>
            </tr>
            </tfoot>
            <tbody>
            @foreach($compras as $compra)
                <tr>
                    <td>{{$compra->fecha_registro}}</td>
                    <td>{{$compra->valor}}</td>
                    <td>{{$compra->cantidad}}</td>
                    <td>
                        <a href="{{route('compras.show', $usuario->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Ver"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                        <a href="{{route('compras.edit', $usuario->id)}}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit" aria-hidden="true"></i></a>
                        <a href="{{url('$compras/eliminar', $usuario->id)}}" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
