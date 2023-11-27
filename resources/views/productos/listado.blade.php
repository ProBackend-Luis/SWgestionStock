@extends('layouts.master')


@section('title', 'Productos')

@section('content')

    <h1>Listado de Productos</h1>

    <form action="" class="row g-3"> 
            <div class="col-auto">
        </div>
            <div class="col-auto">
                <input type="text" class="form-control" name="texto">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Buscar</button value="buscar"> 
        </div>
    </form>

    <table class="table">
            <thead>
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
                            </tr>
                    @endforeach
            </tbody>
    </table>
  
@stop