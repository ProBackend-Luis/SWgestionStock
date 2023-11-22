<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = "categorias";

    protected $primaryKey = "id_categoria";


    public $timestamps = true;


    //relacion con producto (1:n)

    public function producto(){
        return $this->hasMany(Producto::class, 'id_categoria', 'id_categoria');
    }
}
