@extends('layouts.master')

@section('title', 'edit')

@section('content')

    <h1>Editar Producto</h1>
    <div class="container">
    <div class="row justify-content-center">
    <form action="{{ url('productos/'.$producto->id_producto) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="mb-3 row">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre_producto }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $producto->descripcion_producto }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="precioVenta" class="col-sm-2 col-form-label">Precio Venta</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="precioVenta" name="precioVenta" value="{{ $producto->precioVenta }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <input type="submit" value="Guardar" class="btn btn-success">
                </div>
               
            </div>
        </div>
    </form>
    </div>
    </div>
@stop