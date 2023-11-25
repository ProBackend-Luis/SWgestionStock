<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\SucursalesController;
use App\Http\Controllers\InicioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('login');
});

/*
Route::get('/', function () {
    return view('inicio');
});
*/

//Route::get('/productos', function () {
//    return view('productos');
//});

/*
Route::get('/categorias', function () {
    return view('categorias');
});
*/

/*
Route::get('/sucursales', function () {
    return view('sucursales');
});
*/


Route::get('/inicio', [InicioController::class, 'list'])->name('inicio.list');

/*
Route::get('/productos', [ProductosController::class, 'list'])->name('productos.list');
Route::get('/categorias', [CategoriasController::class, 'list'])->name('categorias.list');
Route::get('/sucursales', [SucursalesController::class, 'list'])->name('sucursales.list');
*/


Route::resource('/productos', 'App\Http\Controllers\ProductosController');
Route::resource('/categorias', 'App\Http\Controllers\CategoriasController'); 
Route::resource('/sucursales', 'App\Http\Controllers\SucursalesController');