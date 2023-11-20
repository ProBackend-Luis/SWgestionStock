<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SucursalesController extends Controller
{
    public function list(){
        $nombre = 'Luis';

        return view('sucursales')
        ->with('nombre', $nombre);
    }
}
