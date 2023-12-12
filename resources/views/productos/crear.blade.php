@extends('layouts.master')

@section('title', 'Productos')

@section('content')

    <h1>Registrar Nuevo Producto</h1>

    <form action="{{ url('/productos') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-6">

                <div class="mb-3 row">
                    <label for="codigo" class="col-sm-2 col-form-label">Codigo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="codigo" name="codigo" value="{{ old('codigo')}}">
                        @error('codigo')
                        <small style="color:red;">* {{ $message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre')}}">
                        @error('nombre')
                        <small style="color:red;">* {{ $message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion')}}">
                        @error('descripcion')
                        <small style="color:red;">* {{ $message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="cantidad" class="col-sm-2 col-form-label">Cantidad</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{ old('cantidad')}}">
                        @error('cantidad')
                        <small style="color:red;">* {{ $message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="precioVenta" class="col-sm-2 col-form-label">Precio Venta</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="precioVenta" name="precioVenta" value="{{ old('precioVenta')}}">
                        @error('precioVenta')
                        <small style="color:red;">* {{ $message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="categoria" class="col-sm-2 col-form-label">Categoria</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="categoria" name="categoria" value="{{ old('categoria')}}">
                        @error('categoria')
                        <small style="color:red;">* {{ $message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="sucursal" class="col-sm-2 col-form-label">Sucursal</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="sucursal" name="sucursal" value="{{ old('sucursal')}}">
                    @error('sucursal')
                        <small style="color:red;">* {{ $message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <input type="submit" value="Guardar" class="btn btn-success">
                </div>
        </div>
    </div>
    </form>
@stop