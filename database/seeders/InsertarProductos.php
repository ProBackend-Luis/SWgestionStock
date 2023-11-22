<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarProductos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            DB::table('productos')->insert(array(
                
                    ['codigo_producto' => '45364790','nombre_producto'=>'producto1','descripcion_producto'=>'esta es la descripcion', 'cantidad_producto'=>'40', 'precioVenta'=>'25000', 'id_categoria'=>'6', 'id_sucursal'=>'3'],

                    ['codigo_producto' => '87653421','nombre_producto'=>'producto2','descripcion_producto'=>'esta es la descripcion', 'cantidad_producto'=>'40', 'precioVenta'=>'5500', 'id_categoria'=>'5', 'id_sucursal'=>'2'],

                    ['codigo_producto' => '84123210','nombre_producto'=>'producto3','descripcion_producto'=>'esta es la descripcion', 'cantidad_producto'=>'40', 'precioVenta'=>'13500', 'id_categoria'=>'4', 'id_sucursal'=>'1'],

                    ['codigo_producto' => '98143201','nombre_producto'=>'producto4','descripcion_producto'=>'esta es la descripcion', 'cantidad_producto'=>'40', 'precioVenta'=>'7000', 'id_categoria'=>'3', 'id_sucursal'=>'3'],

            ));
        
    }
}
