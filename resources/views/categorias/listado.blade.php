@extends('layouts.master')


@section('title', 'Categorias')

@section('content')

    <h1>Listado de Categorias</h1>

    <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($categorias as $categoria)
                            <tr>
                                <th scope="row">{{ $categoria->id_categoria}}</th>
                                <td>{{ $categoria->nombre_categoria}}</td>
                            </tr>
                    @endforeach
            </tbody>
    </table>
  
@stop