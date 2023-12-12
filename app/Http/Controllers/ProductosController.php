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
        
        $this->validate($request,[
            'codigo' => ['required','max:8'],
            'nombre' => ['required', 'max:30'],
            'descripcion' => ['required','max:50'],
            'cantidad' => 'required|numeric',
            'precioVenta' => 'required|numeric',
            'categoria' => 'required|numeric',
            'sucursal' => 'required|numeric',

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




    public function edit($productos){

        $producto = Producto::find($productos);

        return view('productos.edit',['producto' => $producto ]);
    }


    public function update(Request $request, $productos){

        $producto = Producto::find($productos);
        $producto->nombre_producto = $request->nombre;
        $producto->descripcion_producto = $request->descripcion;
        $producto->precioVenta = $request->precioVenta;
        $producto->save();

        $productos = Producto::get();
        return view('productos.listado', ['productos' =>  $productos ]);

    }


    public function destroy($productos){

        $producto = Producto::find($productos);
        $producto ->delete();

        $productos = Producto::get();
        return view('productos.listado', ['productos' =>  $productos ]);

    }

}
