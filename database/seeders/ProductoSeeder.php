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
            'nombre' => "Producto 1",
            'precio_unitario' => 2000,
        ]);

        DB::table('productos')->insert([
            'sku' => "prod2",
            'nombre' => "Producto 2",
            'precio_unitario' => 5000,
        ]);

        DB::table('productos')->insert([
            'sku' => "prod3",
            'nombre' => "Producto 3",
            'precio_unitario' => 12000,
        ]);

        DB::table('productos')->insert([
            'sku' => "prod4",
            'nombre' => "Producto 4",
            'precio_unitario' => 10000,
        ]);

        DB::table('productos')->insert([
            'sku' => "prod5",
            'nombre' => "Producto 5",
            'precio_unitario' => 3000,
        ]);

        DB::table('productos')->insert([
            'sku' => "prod6",
            'nombre' => "Producto 61",
            'precio_unitario' => 7000,
        ]);
    }
}
