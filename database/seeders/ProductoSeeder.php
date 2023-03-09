<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'sku' => "prod1",
            'nombre' => "Ropa",
            'precio_unitario' => 2000,
        ]);

        DB::table('productos')->insert([
            'sku' => "prod2",
            'nombre' => "Comida",
            'precio_unitario' => 5000,
        ]);
    }
}
