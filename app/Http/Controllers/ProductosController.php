<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Sucursal;


class ProductosController extends Controller
{
    public function index(){
       
        $productos = Producto::get()->load('sucursal');
        return view('productos.listado', ['productos' =>  $productos ]);

    }

    public function create(){
        $sucursales = Sucursal::get();
        return view('productos.crear')
        ->with('sucursales', $sucursales);
    }

    public function store(Request $request){
        //dd($request);

       
        $this->validate($request,[
            'codigo' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required',
            'precioVenta' => 'required',

        ]);
        
        $producto = new Producto();
        $producto->codigo_producto = $request->codigo;
        $producto->nombre_producto = $request->nombre;
        $producto->descripcion_producto = $request->descripcion;
        $producto->cantidad_producto = $request->cantidad;
        $producto->precioVenta = $request->precioVenta;
        $producto->id_categoria = $request->categoria;
        $producto->id_sucursal = $request->sucursal;
        $producto->save();

        $productos = Producto::get();
        return view('productos.listado', ['productos' =>  $productos ]);
    }
}
