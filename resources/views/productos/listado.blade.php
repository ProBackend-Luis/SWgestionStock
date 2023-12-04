@extends('layouts.master')


@section('title', 'Productos')

@section('content')
    <div class="container text-center">
    <h1>Listado de Productos</h1>
    </div>
    <br>
    <a href="{{ url('productos/create') }}" class="btn btn-primary mb-3">Nuevo Registro</a>
    <br>
    <div class="table-responsive">
    <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio Venta</th>
                    <th scope="col">Categoria</th> 
                    <th scope="col">Sucursal</th>                     
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
                                <td>{{ $producto->categoria->nombre_categoria}}</td> 
                                <td>{{ $producto->sucursal->nombre_sucursal}}</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$producto->id}}">Editar</button>
                                <td>
                                <td>
                                    <form action="{{ url('productos/'.$producto->id_producto) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" onclick="return confirm('¿Esta seguro de eliminar?');" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>                             
                            </tr>
                    @endforeach
            </tbody>
    </table>
    </div>
  
@stop