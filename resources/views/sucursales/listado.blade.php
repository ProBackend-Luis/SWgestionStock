@extends('layouts.master')


@section('title', 'Sucursales')

@section('content')

    <h1>Listado de Sucursales</h1>

    <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($sucursales as $sucursal)
                            <tr>
                                <th scope="row">{{ $sucursal->id_sucursal}}</th>
                                <td>{{ $sucursal->nombre_sucursal}}</td>
                            </tr>
                    @endforeach
            </tbody>
    </table>
  
@stop