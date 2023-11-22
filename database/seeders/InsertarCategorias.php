<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarCategorias extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert(array(
            ['nombre_categoria' => 'categ-1'],
            ['nombre_categoria' => 'categ-2'],
            ['nombre_categoria' => 'categ-3'],
            ['nombre_categoria' => 'categ-4'],
            ['nombre_categoria' => 'categ-5'],
            ['nombre_categoria' => 'categ-6']
        ));
    }
}
