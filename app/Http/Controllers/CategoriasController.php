<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function list(){
        $nombre = 'Luis';

        return view('categorias')
        ->with('nombre', $nombre);
    }
}
