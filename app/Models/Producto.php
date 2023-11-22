<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = "productos";

    protected $primaryKey = "id_producto";


    public $timestamps = true;


    //relacion con categoria (n:1)

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

    //relacion con sucursal (n:1)

    public function sucursal(){
        return $this->belongsTo(Sucursal::class, 'id_sucursal');
    }

}
