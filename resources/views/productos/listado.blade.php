@extends('layouts.master')


@section('title', 'Productos')

@section('content')

    <h1>Listado de Productos</h1>

    <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio Venta</th>
                    <th scope="col">Creado</th>
                    <th scope="col">Actualizado</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($productos as $producto)
                            <tr>
                                <th scope="row">{{ $producto->id_producto}}</th>
                                <td>{{ $producto->codigo_producto}}</td>
                                <td>{{ $producto->nombre_producto}}</td>
                                <td>{{ $producto->descripcion_producto}}</td>
                                <td>{{ $producto->cantidad_producto}}</td>
                                <td>{{ $producto->precioVenta}}</td>
                                <td>{{ $producto->created_at}}</td>
                                <td>{{ $producto->updated_at}}</td>
                            </tr>
                    @endforeach
            </tbody>
    </table>
  
@stop