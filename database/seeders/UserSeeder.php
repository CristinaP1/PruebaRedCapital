<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Pedro',
            'apellido' => 'Araya',
            'edad' => '40',
            'admin' => 0,
            'email' => 'pedro.araya@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'Juan',
            'apellido' => 'Pérez',
            'edad' => '25',
            'admin' => 0,
            'email' => 'juan.perez@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'Carmen',
            'apellido' => 'Gloria',
            'edad' => '48',
            'admin' => 1,
            'email' => 'carmen.gloria@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'Romina',
            'apellido' => 'Rivera',
            'edad' => '17',
            'admin' => 0,
            'email' => 'romina.rivera@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'Camila',
            'apellido' => 'Rojas',
            'edad' => '18',
            'admin' => 0,
            'email' => 'camila.rojas@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
