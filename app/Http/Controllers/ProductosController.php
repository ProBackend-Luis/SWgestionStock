<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductosController extends Controller
{
    public function list(){
        $nombre = 'Luis';

        return view('productos')
        ->with('nombre', $nombre);
    }
}
