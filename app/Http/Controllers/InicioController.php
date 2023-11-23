<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function list(){
        $nombre = 'Luis';

        return view('inicio')
        ->with('nombre', $nombre);
    }
}
