<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarSucursales extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sucursales')->insert(array(
            ['nombre_sucursal' => 'Sucursal-1'],
            ['nombre_sucursal' => 'Sucursal-2'],
            ['nombre_sucursal' => 'Sucursal-3']
        ));
        
    }
}
